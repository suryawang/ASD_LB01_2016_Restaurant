@extends('admin.master')

@section('content')
    <div class="form-group">
        <div class="col-md-3 selectContainer">
            <select class="form-control" name="table">
                <option value="">Table</option>
                <option value="1" onclick="ord1()">1</option>
                <option value="2" onclick="ord2()">2</option>
                <option value="3" onclick="ord3()">3</option>
                <option value="4" onclick="ord4()">4</option>
                <option value="5" onclick="ord5()">5</option>
                <option value="6" onclick="ord6()">6</option>
                <option value="7" onclick="ord7()">7</option>
                <option value="8" onclick="ord8()">8</option>
                <option value="9" onclick="ord9()">9</option>
                <option value="10" onclick="ord10()">10</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="jumbotron bgfill">
                @foreach($orders as $order)
                    @foreach($order->getDetail as $detail)
                        <p>{!! $detail->food->name !!}</p>
                        <img src="{{ asset('assets/img/menu/'.$detail->food->picture) }}" width="200px" height="100px" >
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
                    $('.order1').hide();
                    $('.order2').hide();
                    $('.order3').hide();
                    $('.order4').hide();
                    $('.order5').hide();
                }
        );

        function ord1(){
            $('.order1').hide();
            $('.order2').hide();
            $('.order3').hide();
            $('.order4').hide();
            $('.order5').hide();
        }
    </script>
@stop
