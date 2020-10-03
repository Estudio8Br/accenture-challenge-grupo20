window.addEventListener("load", function(event) {
         
    const button = document.getElementById('enter')
    const buttons = document.querySelectorAll('.number')
    let count = 0
    let actualLetter = '';

    button.addEventListener('click', function(event){
        event.preventDefault()
        let numbers = document.getElementById('number');

        let word = document.getElementById('word');
       
        $.post(
            '{{ route('get-letter') }}',
            //'https://backendgrupo20.herokuapp.com/get-letter',
            {
                _token: '{{ csrf_token() }}',
                letter: numbers
            },
            function(data) {
                console.log(data)
                word.value = word.value + data;
            }
        );
        

        //numbers.value = ''
        count = 0
        actualLetter = '';
    })

    for(b of buttons){
        b.addEventListener('click', function(){
            let value = this.querySelector('.numero').textContent
            let condition;
            if (value == 7 || value == 9){
                condition = 4
            } else {
                condition = 3
            }
            if (count < condition) {
                if (count == 0){
                    actualLetter == value
                }
                if(value == actualLetter || actualLetter == ''){
                    //console.log(actualLetter)
                    numbers.value = numbers.value + value
                    actualLetter == value
                    count++
                }
            }
        })
        
    }
});