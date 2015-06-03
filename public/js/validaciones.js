

$(document).ready(function() {/*Terminan el document ready */
    /*Inician las validaciones para el formulario proyecto */
    $('#formularioproyecto').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'fa fa-check fa-2x',
            invalid: 'fa fa-times fa-2x',
            validating: 'fa fa-refresh fa-2x'
        },
        fields: {
            campo0: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo1: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    digits: {
                        message: 'El campo solo debe contener dígitos'
                    },
                }
            },
             campo2: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo3: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo4: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo5: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo6: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
             campo7: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo8: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo9: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    notEmpty: {
                        message: 'El campo es obligatorio'
                    },
                    stringLength: {
                        min: 2,
                        message: 'El campo debe contener al menos 2 caracteres.'
                    },
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo10: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo11: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
            campo12: {
                err:'tooltip',
                // The messages for this field are shown as usual
                validators: {
                    html:true,
                    regexp: {
                        regexp: /^[\sa-z0-9 A-Z ñ.-_,()*ÑáéíóúÁÉÍÓÚ-]+$/i,
                        message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*números<br>*espacio(s) en blanco<br>*parentesis,guión normal,guion bajo<br>*paréntesis y asteriscos'
                    }
                }
            },
           
        }
    });
    /*Terminan las validaciones para el formulario proyecto */

    
    


});/*Termina el document ready*/

