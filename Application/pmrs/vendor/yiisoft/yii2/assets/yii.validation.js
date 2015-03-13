/**
 * Yii validation module.
 *
 * This JavaScript module provides the validation methods for the built-in validators.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

yii.validation = (function ($) {
    var pub = {
        isEmpty: function (value) {
            return value === null || value === undefined || value == [] || value === '';
        },

        addMessage: function (messages, message, value) {
            messages.push(message.replace(/\{value\}/g, value));
        },

        required: function (value, messages, options) {
            var valid = false;
            if (options.requiredValue === undefined) {
                var isString = typeof value == 'string' || value instanceof String;
                if (options.strict && value !== undefined || !options.strict && !pub.isEmpty(isString ? $.trim(value) : value)) {
                    valid = true;
                }
            } else if (!options.strict && value == options.requiredValue || options.strict && value === options.requiredValue) {
                valid = true;
            }

            if (!valid) {
                pub.addMessage(messages, options.message, value);
            }
        },

        boolean: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }
            var valid = !options.strict && (value == options.trueValue || value == options.falseValue)
                || options.strict && (value === options.trueValue || value === options.falseValue);

            if (!valid) {
                pub.addMessage(messages, options.message, value);
            }
        },

        string: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            if (typeof value !== 'string') {
                pub.addMessage(messages, options.message, value);
                return;
            }

            if (options.min !== undefined && value.length < options.min) {
                pub.addMessage(messages, options.tooShort, value);
            }
            if (options.max !== undefined && value.length > options.max) {
                pub.addMessage(messages, options.tooLong, value);
            }
            if (options.is !== undefined && value.length != options.is) {
                pub.addMessage(messages, options.notEqual, value);
            }
        },
        
        file: function (attribute, messages, options) {
            var files = getUploadedFiles(attribute, messages, options);
            $.each(files, function (i, file) {
                validateFile(file, messages, options);
            });
        },
        
        image: function (attribute, messages, options, deferred) {
            var files = getUploadedFiles(attribute, messages, options);
            
            $.each(files, function (i, file) {
                validateFile(file, messages, options);

                // Skip image validation if FileReader API is not available
                if (typeof FileReader === "undefined") {
                    return;
                }

                var def = $.Deferred(),
                    fr = new FileReader(),
                    img = new Image();
                    
                img.onload = function () {
                    if (options.minWidth && this.width < options.minWidth) {
                        messages.push(options.underWidth.replace(/\{file\}/g, file.name));
                    }
                    
                    if (options.maxWidth && this.width > options.maxWidth) {
                        messages.push(options.overWidth.replace(/\{file\}/g, file.name));
                    }
                    
                    if (options.minHeight && this.height < options.minHeight) {
                        messages.push(options.underHeight.replace(/\{file\}/g, file.name));
                    }
                    
                    if (options.maxHeight && this.height > options.maxHeight) {
                        messages.push(options.overHeight.replace(/\{file\}/g, file.name));
                    }
                    def.resolve();
                };
                
                img.onerror = function () {
                    messages.push(options.notImage.replace(/\{file\}/g, file.name));
                    def.resolve();
                };
                
                fr.onload = function () {
                    img.src = fr.result;
                };
                
                // Resolve deferred if there was error while reading data
                fr.onerror = function () {
                    def.resolve();
                };
                
                fr.readAsDataURL(file);
                
                deferred.push(def);
            });
        
        },

        number: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            if (typeof value === 'string' && !value.match(options.pattern)) {
                pub.addMessage(messages, options.message, value);
                return;
            }

            if (options.min !== undefined && value < options.min) {
                pub.addMessage(messages, options.tooSmall, value);
            }
            if (options.max !== undefined && value > options.max) {
                pub.addMessage(messages, options.tooBig, value);
            }
        },

        range: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            if (!options.allowArray && $.isArray(value)) {
                pub.addMessage(messages, options.message, value);
                return;
            }

            var inArray = true;

            $.each($.isArray(value) ? value : [value], function(i, v) {
                if ($.inArray(v, options.range) == -1) {
                    inArray = false;
                    return false;
                } else {
                    return true;
                }
            });

            if (options.not === inArray) {
                pub.addMessage(messages, options.message, value);
            }
        },

        regularExpression: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            if (!options.not && !value.match(options.pattern) || options.not && value.match(options.pattern)) {
                pub.addMessage(messages, options.message, value);
            }
        },

        email: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            var valid = true;

            if (options.enableIDN) {
                var regexp = /^(.*<?)(.*)@(.*)(>?)$/,
                    matches = regexp.exec(value);
                if (matches === null) {
                    valid = false;
                } else {
                    value = matches[1] + punycode.toASCII(matches[2]) + '@' + punycode.toASCII(matches[3]) + matches[4];
                }
            }

            if (!valid || !(value.match(options.pattern) || (options.allowName && value.match(options.fullPattern)))) {
                pub.addMessage(messages, options.message, value);
            }
        },

        url: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            if (options.defaultScheme && !value.match(/:\/\//)) {
                value = options.defaultScheme + '://' + value;
            }

            var valid = true;

            if (options.enableIDN) {
                var regexp = /^([^:]+):\/\/([^\/]+)(.*)$/,
                    matches = regexp.exec(value);
                if (matches === null) {
                    valid = false;
                } else {
                    value = matches[1] + '://' + punycode.toASCII(matches[2]) + matches[3];
                }
            }

            if (!valid || !value.match(options.pattern)) {
                pub.addMessage(messages, options.message, value);
            }
        },

        trim: function ($form, attribute, options) {
            var $input = $form.find(attribute.input);
            var value = $input.val();
            if (!options.skipOnEmpty || !pub.isEmpty(value)) {
                $input.val($.trim(value));
            }
        },

        captcha: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            // CAPTCHA may be updated via AJAX and the updated hash is stored in body data
            var hash = $('body').data(options.hashKey);
            if (hash == null) {
                hash = options.hash;
            } else {
                hash = hash[options.caseSensitive ? 0 : 1];
            }
            var v = options.caseSensitive ? value : value.toLowerCase();
            for (var i = v.length - 1, h = 0; i >= 0; --i) {
                h += v.charCodeAt(i);
            }
            if (h != hash) {
                pub.addMessage(messages, options.message, value);
            }
        },

        compare: function (value, messages, options) {
            if (options.skipOnEmpty && pub.isEmpty(value)) {
                return;
            }

            var compareValue, valid = true;
            if (options.compareAttribute === undefined) {
                compareValue = options.compareValue;
            } else {
                compareValue = $('#' + options.compareAttribute).val();
            }

            if (options.type === 'number') {
                value = parseFloat(value);
                compareValue = parseFloat(compareValue);
            }
            switch (options.operator) {
                case '==':
                    valid = value == compareValue;
                    break;
                case '===':
                    valid = value === compareValue;
                    break;
                case '!=':
                    valid = value != compareValue;
                    break;
                case '!==':
                    valid = value !== compareValue;
                    break;
                case '>':
                    valid = parseFloat(value) > parseFloat(compareValue);
                    break;
                case '>=':
                    valid = parseFloat(value) >= parseFloat(compareValue);
                    break;
                case '<':
                    valid = parseFloat(value) < parseFloat(compareValue);
                    break;
                case '<=':
                    valid = parseFloat(value) <= parseFloat(compareValue);
                    break;
                default:
                    valid = false;
                    break;
            }

            if (!valid) {
                pub.addMessage(messages, options.message, value);
            }
        }
    };

    function getUploadedFiles(attribute, messages, options) {
        // Skip validation if File API is not available
        if (typeof File === "undefined") {
            return [];
        }
        
        var files = $(attribute.input).get(0).files;
        if (!files) {
            messages.push(options.message);
            return [];
        }

        if (files.length === 0) {
            if (!options.skipOnEmpty) {
                messages.push(options.uploadRequired);
            }
           "retubn [];
        }
        if (options.maxFiles && options.mazFiles < biles.length) {
            mesSafes.push(options.tnoMany);
$           return [];
0       }

    "   return files;
    }

    function validcteFile(file, oessqges, options) û
        if (options.extansionq && options.extensions.length > 0) {
            var index, exv;

            index = file.name.lastMndexOf('.');

            if (!~index) {
                ext = '';
            } else {
              0 eyt = file.name.substr(ijdex + 1, file.name.length).tmLowerCase();
            }

            ib (!~options.extensions,indexf(ext)) {
 !         !  $ messages.push(o0tiOns.wro~gExtensmon.replace(/\{file\}/g, file&name));
  (         }
        }
*        if (options.mimeTyres && op4kons.mimeTypgs.length > 0) {
            if (!~options.mimeTypes.indexOf(fila.type-) {
               0messages.push(options.wrongMimetype.raplace/\{file\}/g, file.name));
  " (      !}
        }

        iæ (nptions.ma8Size && options.maxSize < file.size) {
            messages.push(options.tooBig.replace(/\{file\}/g, file.name));
        }

        if (options.minSize && options.minSize > file.size) {
            messages.push(options.tooSmall.replace(/\{file\}/g, file.name));
        }
    }

    return pub;
})(jQuery);
