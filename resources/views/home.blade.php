<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accenture Challenge - Grupo 20</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <style>
          .dnone {
    display: none !important;
}

.keyboard .container {
    display: table;
    padding-bottom: 5vh;
    margin: auto;
}
@media (max-width: 900px) {
    .keyboard .container {
        background: #fff;
        z-index: -1;
    }
}
.keyboard .container .row {
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}
.keyboard .container .row .col-sm-2 {
    cursor: pointer;
    position: relative;
    display: inline-block;
    width: 60px;
    margin-left: 12px;
    margin-right: 12px;
    border-radius: 30px;
    overflow: hidden;
    padding: 5px;
}
.keyboard .container .row .col-sm-2::after,
.keyboard .container .row .col-sm-2::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    transition: all 0.25s ease;
    border-radius: 30px;
}
.keyboard .container .row .col-sm-2:hover::before {
    box-shadow: inset 0 0 0 1px #2d2c3e;
}
.keyboard .container .row .col-sm-2 .numero {
    font-weight: 600;
    font-size: 16px;
}
.keyboard .container .row .col-sm-2 .letras {
    font-size: 10px;
    display: flex;
    bottom: 5px;
    position: absolute;
    left: 15px;
}
.keyboard .container .row .col-sm-2 .number {
    cursor: pointer;
}

      </style>
<body>
<div class="container">
    <div class="col-3 m-auto">
        <div class="card p-3" >
            <form action="">
                <div id="screen" class="card card-body p-1 mb-2">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control mb-2" id="word" disabled>
                            <input type="text" class="form-control" id="numbers">
                        </div>
                </div>
                <div class="card mb-4">
                    <button type="submit" id="enter">ENTER</button>
                </div>
                <div id="buttons">
                    
                    <section class="keyboard">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2" data-value="1">
                                    <b class="numero">1</b>
                                    <div class="letras">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-sm-2 number" data-value="2">
                                    <b class="numero">2</b>
                                    <div class="letras">
                                        <span>a</span>
                                        <span>b</span>
                                        <span>c</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 number" data-value="3">
                                    <b class="numero">3</b>
                                    <div class="letras">
                                        <span>d</span>
                                        <span>e</span>
                                        <span>f</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 number" data-value="4">
                                    <b class="numero">4</b>
                                    <div class="letras">
                                        <span>g</span>
                                        <span>h</span>
                                        <span>i</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 number" data-value="5">
                                    <b class="numero">5</b>
                                    <div class="letras">
                                        <span>j</span>
                                        <span>k</span>
                                        <span>l</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 number" data-value="6">
                                    <b class="numero">6</b>
                                    <div class="letras">
                                        <span>m</span>
                                        <span>n</span>
                                        <span>o</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 number" data-value="7">
                                    <b class="numero">7</b>
                                    <div class="letras">
                                        <span>p</span>
                                        <span>q</span>
                                        <span>r</span>
                                        <span>s</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 number" data-value="8">
                                    <b class="numero">8</b>
                                    <div class="letras">
                                        <span>t</span>
                                        <span>u</span>
                                        <span>v</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 number" data-value="9">
                                    <b class="numero">9</b>
                                    <div class="letras">
                                        <span>w</span>
                                        <span>x</span>
                                        <span>y</span>
                                        <span>z</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2" data-value="">
                                    <b class="numero">*</b>
                                    <div class="letras">
                                        <span>+</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 number" data-value="0">
                                    <b class="numero">0</b>
                                    <div class="letras">
                                        <span>t</span>
                                        <span>u</span>
                                        <span>v</span>
                                    </div>
                                </div>
                                <div class="col-sm-2" data-value="">
                                    <b class="numero">#</b>
                                    <div class="letras">
                                        <span>&uarr;</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </form>
          </div>
    </div>
</div>



{{-- <script src="{{ asset('assets/js/index.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>
<script>
window.addEventListener("DOMContentLoaded", function(event) {
         
    const button = document.getElementById('enter')
    const buttons = document.querySelectorAll('.number')
    let count = 0
    let actualLetter = '';

    button.addEventListener('click', function(event){
        event.preventDefault()
        let numbers = document.getElementById('number');

        let word = document.getElementById('word');
       
        
        // $.post (
        //     '{{ route('get-letter') }}',
        //     {
        //         _token: '{{ csrf_token() }}',
        //         letter: numbers
        //     },
        //     function(data) {
        //         console.log(data)
        //         word.value = word.value + data;
        //     }
        // );
        
        axios.post('https://backendgrupo20.herokuapp.com/get-letter').then( data => {
            word.value = word.value + data;
        })
        

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
</script>
    </body>
</html>
