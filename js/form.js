$(document).ready(function($){

    if($('#size').val() === 'cupcakes'){

            $('#cupcake-heading').show();
            $('#no-cupcakes').show();

            $('#size').on('change', function cupcakeOptions(){

            if($(this).val() === 'cupcakes'){
                $('#cupcake-heading').show();
                $('#no-cupcakes').show();

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }
            }else{
                $('#cupcake-heading').hide();
                $('#no-cupcakes').hide();
            }
        })
                
    }else{
        $('#size').on('change', function cupcakeOptions(){

            if($(this).val() === 'cupcakes'){
                $('#cupcake-heading').show();
                $('#no-cupcakes').show();

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }
            }else{
                $('#cupcake-heading').hide();
                $('#no-cupcakes').hide();
            }
        })
    }








    if($('#size').val() === 'single-number'){

        $('#single-number-selection-heading').show();
        $('#single-number-option').show();

        $('#size').on('change', function singleNumberOptions(){

            if($(this).val() === 'single-number'){
                $('#single-number-selection-heading').show();
                $('#single-number-option').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }

            }else{
                $('#single-number-selection-heading').hide();
                $('#single-number-option').hide();
            }

        })

    }else{

        $('#size').on('change', function singleNumberOptions(){

            if($(this).val() === 'single-number'){
                $('#single-number-selection-heading').show();
                $('#single-number-option').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#double-number-option-one').show()){
                    $('#double-number-selection-heading').hide();
                    $('#double-number-option-one').hide();
                    $('#double-number-option-two').hide();
                }

            }else{
                $('#single-number-selection-heading').hide();
                $('#single-number-option').hide();
            }

        })

    }


    if($('#size').val() === 'double-number'){

        $('#double-number-selection-heading').show();
        $('#double-number-option-one').show();
        $('#double-number-option-two').show();

        $('#size').on('change', function doubleNumberOptions(){

            if($(this).val() === 'double-number'){

                $('#double-number-selection-heading').show();
                $('#double-number-option-one').show();
                $('#double-number-option-two').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

            }else{
                $('#double-number-selection-heading').hide();
                $('#double-number-option-one').hide();
                $('#double-number-option-two').hide();
            }
        })

    }else{

        $('#size').on('change', function doubleNumberOptions(){

            if($(this).val() === 'double-number'){

                $('#double-number-selection-heading').show();
                $('#double-number-option-one').show();
                $('#double-number-option-two').show();

                if($('#no-cupcakes').show()){
                    $('#cupcake-heading').hide();
                    $('#no-cupcakes').hide();
                }

                if($('#single-number-option').show()){
                    $('#single-number-selection-heading').hide();
                    $('#single-number-option').hide();
                }

            }else{
                $('#double-number-selection-heading').hide();
                $('#double-number-option-one').hide();
                $('#double-number-option-two').hide();
            }

        })
    }

})