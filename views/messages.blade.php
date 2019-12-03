@if(Session::has('btoasts'))
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .bs-example{
            margin: 20px;
            position: absolute;
            min-width: 300px;
        }
        @media only screen and (min-width: 968px) {
            .top-right{
                top: 0;
                right: 0;
            }
            .bottom-center{
                top: 80%;
                left: 35%;
            }
            .top-center{
                bottom: 0%;
                left: 35%;
            }
            .center{
                top: 50%;
                left: 35%;
            }
            .top-left{
                top: 0;
                left: 0;
            }
            .bottom-left{
                bottom: 0;
                left: 0;
            }
            .bottom-right{
                bottom: 0;
                right: 0;
            }
        }
        @media only screen and (max-width: 967px) {
            .top-right, .bottom-center,.top-center ,.center ,.top-left ,.bottom-left ,.bottom-right {
                top: 0;
                right: 0;
            }
        }

        .info, .success, .error, .secondary ,.dark ,.warning{
            color: #fff!important;
        }
        .light{
            color: #000000!important;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".toast").toast({
                autohide: {{(bool) config('laravel-btoast.autohide') == true ? 'true' : 'false'}},
                delay: {{config('laravel-btoast.delay')}},
                animation: {{ config('laravel-btoast.animation') == true ? 'true' : 'false' }}
            });
            $('.toast').toast('show')
        });
    </script>
    <div class="bs-example {{config('laravel-btoast.position')}}">
        {{config('laravel-btoast.animation', true)}}
        @foreach(Session::get('btoasts') as $toast)
            <div class="toast fade">
                <div class="toast-header bg-{{$toast['level'] == 'error' ? 'danger': $toast['level']}} {{$toast['level']}}">
                    @if(!is_null($toast['title']))
                        <strong class="mr-auto">{{ $toast['title'] }}</strong>
                    @endif
                    @if(!is_null($toast['subtitle']))
                        <small class="text-muted {{$toast['level']}}">{{ $toast['subtitle'] }}</small>
                    @endif
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">{{ $toast['message'] }}</div>
            </div>
        @endforeach
    </div>
@endif
