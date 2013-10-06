@extends("home.layout")
@section("content")
<style>
    svg {
        display: block;
    }
    .mypiechart {
        width: 500px;
        border: 2px;
    }

    #chartnn svg{
        height:400px;
        width:100%;
        /*
        margin: 10px;
        Minimum height and width is a good idea to prevent negative SVG dimensions...
        For example width should be =< margin.left + margin.right + 1,
        of course 1 pixel for the entire chart would not be very useful, BUT should not have errors
        */
    }
</style>

<div id="content">
    <div class="container" id="about">
        <div class="row">
            <!-- sidebar -->
            <div class="span3 sidebar">
                <div class="section-menu">
                    <ul class="nav nav-list">
                        <li class="nav-header">In This Section</li>
                        <li class="active"><a href="about.htm" class="first">Data Results <small>View Data Statistics... </small><i class="icon-angle-right"></i></a></li>
                        <!--                        <li><a href="team.htm">The Team <small>Our team of stars</small><i class="icon-angle-right"></i></a></li>-->
                        <!--                        <li><a href="contact.htm">Contact Us<small>How to get in touch</small><i class="icon-angle-right"></i></a></li>-->
                    </ul>
                </div>
            </div>

            <!--main content-->

            <div class="span9">
                <h2 class="title-divider"><span>Data Analysis <span class="de-em">Results</span></span> <small>Select Counties Whose Data To Analyse...</small></h2>

                <div id="chartnn" class='with-3d-shadow with-transitions'>
                    <svg></svg>
                </div>

                <h3>Data Results:</h3>
                @foreach($countyData as $county)
                <div class="row" style="padding-left: 40px;">


                <h4>{{$county->county}}</h4>
                <div class="span3" style="height: 250px;">
                    <svg id="test{{$county->id}}" class="mypiechart"></svg>
                    <script>
                        var testdata{{$county->id}} = [
                            {
                                key: "Below Poverty Line",
                                y: {{$county->poverty_level}}
                            },
                            {
                                key: "Above Poverty Line",
                                y: {{100-$county->poverty_level}}
                            },
                        ];


                        nv.addGraph(function() {
                            var width = 200,
                                height = 200;

                            var chart = nv.models.pieChart()
                                .x(function(d) { return d.key })
                                .y(function(d) { return d.y })
                                .color(d3.scale.category10().range())
                                .width(width)
                                .height(height);

                            d3.select("#test{{$county->id}}")
                                .datum(testdata{{$county->id}})
                                .transition().duration(1200)
                                .attr('width', width)
                                .attr('height', height)
                                .call(chart);

                            chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });

                            return chart;
                        });

                    </script>

                </div>
                <div class="span5" style="float:right">
                <h5>Information:</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Statistic
                            </th>
                            <th>
                                Figures
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                           <td>
                               Total Population
                           </td>
                            <td>
                                {{$county->population}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Poor Population
                            </td>
                            <td>
                                {{$county->population_poor}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Poor Population (%age)
                            </td>
                            <td>
                                {{$county->poverty_level}}%
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                </div>
                <hr>
                @endforeach


            </div>
        </div>
    </div>
</div>

<script>

    /* Inspired by Lee Byron's test data generator. */
    function stream_layers(n, m, o) {
        if (arguments.length < 3) o = 0;
        function bump(a) {
            var x = 1 / (.1 + Math.random()),
                y = 2 * Math.random() - .5,
                z = 10 / (.1 + Math.random());
            for (var i = 0; i < m; i++) {
                var w = (i / m - y) * z;
                a[i] += x * Math.exp(-w * w);
            }
        }
        return d3.range(n).map(function() {
            var a = [], i;
            for (i = 0; i < m; i++) a[i] = o + o * Math.random();
            for (i = 0; i < 5; i++) bump(a);
            return a.map(stream_index);
        });
    }

    /* Another layer generator using gamma distributions. */
    function stream_waves(n, m) {
        return d3.range(n).map(function(i) {
            return d3.range(m).map(function(j) {
                var x = 20 * j / m - i / 3;
                return 2 * x * Math.exp(-.5 * x);
            }).map(stream_index);
        });
    }

    function stream_index(d, i) {
        return {x: i, y: Math.max(0, d)};
    }



    var tabulardata2 = [
        {
            key:"Total Population",
            values:[
    @foreach($countyData as $county)
    {
        x:"{{$county->county}}",
            y:{{$county->population}}
    },
    @endforeach
    ]
    },

    {
        key:"Population Below Poverty Line",
            values:[
         @foreach($countyData as $county)
        {
            x:"{{$county->county}}",
            y:{{$county->population_poor}}
    },
        @endforeach

    ]
    },


    ];
   console.log(exampleData());

    nv.addGraph(function() {
             var chart = nv.models.multiBarChart();

//             chart.xAxis
//                 .tickFormat(d3.format(',f'));

             chart.yAxis
                 .tickFormat(d3.format(',.1f'));

             d3.select('#chartnn svg')
                 .datum(tabulardata2)
               .transition().duration(500).call(chart);

             nv.utils.windowResize(chart.update);

            return chart;
         });




     function exampleData() {
           return stream_layers(3,10+Math.random()*100,.1).map(function(data, i) {
                 return {
                       key: 'Stream' + i,
                       values: data
                };
           });
     }




</script>

@stop