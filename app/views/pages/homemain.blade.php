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

    #chart1 svg{
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
<div class="hero" id="highlighted">
    <div class="inner">
        <!--Flexslider Showshow-->
        <section class="flexslider-wrapper container">
            <div class="flexslider" data-slidernav="auto" data-transition="slide">
                <!--The Slides-->
                <div class="slides">

                    <!--Slide #1 with caption-->
                    <div class="slide row-fluid">
                        <div class="span7"><img src="/img/projopics/kenyamap.png" alt="Slide 1" /></div>
                        <div class="span5 caption">
                            <h2>Map The Data</h2>
                            <h4>On <a href="http://themelize.me">OpenDSS</a></h4>
                            <p>You Can View Your Data in a Way thats Easy to Work With and Understand.</p>
                            <a href="#" class="btn btn-large btn-primary">More Details &raquo</a> </div>
                    </div>

                    <!--Slide #2 straight image 1170px wide x 390px high-->
<!--                    <div class="slide row-fluid"> <img src="img/slides/slide2.png" alt="Slide 2" /> </div>-->

                    <!--Slide #3 & so on below-->
                    <div class="slide row-fluid">
                        <div class="span7"><img src="/img/projopics/bluegraph.png" alt="Slide 1" /></div>
                        <div class="span5 caption">
                            <h2>Graph The Data</h2>
                            <h4>On <a href="http://themelize.me">OpenDSS</a></h4>
                            <p>You Can View Your Data in a Way thats Easy to Work With and Understand.</p>
                            <a href="#" class="btn btn-large btn-primary">More Details &raquo</a> </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<div id="content">
    <div class="container">
        <!-- Services -->
        <div class="block features">
            <h2 class="title-divider"><span>Core <span class="de-em">Features</span></span> <small>What do you get with OpenDSS?.</small></h2>
            <ul class="thumbnails">
                <li class="span3">
                    <h3 class="title"><a href="features.htm">Data <span class="de-em">Visualization</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
                <li class="span3">
                    <h3 class="title"><a href="features.htm">Easy <span class="de-em">Decisions</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
                <li class="span3">
                    <h3 class="title"><a href="features.htm">Graph the <span class="de-em">Data</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
                <li class="span3">
                    <h3 class="title"><a href="features.htm">99.9% <span class="de-em">Uptime</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
            </ul>
        </div>

        <div class="block features">
            <h2 class="title-divider"><span>Some <span class="de-em">Statistics</span></span> <small>What do you get with OpenDSS?.</small></h2>
            <!-- Initialize D3 -->
            <ul class="thumbnails">
                <li class="span6">
                    <div id="chart1">
                        <svg></svg>
                    </div>

                </li>

                <li class="span6">
                    <h3 class="title"><a href="features.htm">County  <span class="de-em">Poverty Levels (%):</span></a></h3>
                    <h4>Analysis:</h4>
                    <p>
                        The Bar Chart shows poverty levels in the counties of
                        @foreach($dataArray1 as $dataItem)
                                          <b>{{$dataItem['county']}}</b> ,

                        @endforeach
                        as a percentage of the people who live below the poverty line against the population of
                        people who live there. <br>
                        <i class="de-em" style="float:left">The higher the bar, the higher the poverty level.</i>

                    </p>
                    <br>
                    <h5>Tabulation:</h5>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>County Name</th>
                            <th>Population</th>
                            <th>Poor Population</th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach($dataArray1 as $dataItem)
                        <tr>
                            <td>
                                {{$dataItem['county']}}
                            </td>
                            <td>
                                {{$dataItem['population']}}
                            </td>
                            <td>
                                {{$dataItem['population_poor']}}
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </li>

            </ul>

            <hr style="width:60%; float:none; margin:0 auto 0">
            <br><br>
            <ul class="thumbnails">
                <li class="span6">

                    <h3 class="title"><a href="features.htm">County  <span class="de-em">Populations:</span></a></h3>
                    <h4>Analysis:</h4>
                    <p>
                        The Pie Chart shows population in the counties of
                        @foreach($dataArray1 as $dataItem)
                        <b>{{$dataItem['county']}}</b>,

                        @endforeach
                        as of the last census. This information can be used in concert with the above data
                        to draw conclusions about specific areas.<br>

                    </p>
                    <br>
                    <h5>Tabulation:</h5>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>County Name</th>
                            <th>Population</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dataArray1 as $dataItem)
                        <tr>
                            <td>
                                {{$dataItem['county']}}
                            </td>
                            <td>
                                {{$dataItem['population']}}
                            </td>

                        </tr>

                        @endforeach
                        </tbody>
                    </table>

                </li>

                <li class="span6">
                    <div>
                        <svg id="test1" class="mypiechart"></svg>
                    </div>
                </li>

            </ul>
        </div>

        <!--Pricing Table-->

        <!--Customer testimonial-->

    </div>
</div>
<script>



    historicalBarChart = [
        {

            key: "Poverty Levels",
            values: [
                @foreach($dataArray1 as $dataItem)
    {
        "label" : "{{$dataItem['county']}}" ,
        "value" : {{$dataItem['poverty_level']}}
    } ,

                @endforeach


            ]
        }
    ];




    nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
                .x(function(d) { return d.label })
                .y(function(d) { return d.value })
                .staggerLabels(true)
                //.staggerLabels(historicalBarChart[0].values.length > 8)
                .tooltips(true)
                .showValues(true)
                .transitionDuration(250)

            ;
chart.yAxis.axisLabel("Poverty Level (%)");
        d3.select('#chart1 svg')
            .datum(historicalBarChart)
            .call(chart);

        nv.utils.windowResize(chart.update);

        return chart;
    });



    var testdata = [

    @foreach($dataArray1 as $dataItem)
    {
       key: "{{$dataItem['county']}}" ,
        y : {{$dataItem['population']}}
    } ,

    @endforeach

    ];


    nv.addGraph(function() {
        var width = 500,
            height = 500;

        var chart = nv.models.pieChart()
            .x(function(d) { return d.key })
            .y(function(d) { return d.y })
            .color(d3.scale.category10().range())
            .width(width)
            .height(height);

        d3.select("#test1")
            .datum(testdata)
            .transition().duration(1200)
            .attr('width', width)
            .attr('height', height)
            .call(chart);

        chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });

        return chart;
    });

</script>
<!--<div id="content-below" class="wrapper">-->
<!--    <div class="container">-->
<!--        <div class="row-fluid">-->
<!--            <div class="upsell"> <small class="muted">Want More Information? <span class="spacer">//</span> Free upgrade assistence <span class="spacer">//</span> 24/7 Support <span class="spacer">//</span> Plans from $19.99/month <span class="spacer">//</span> </small> <a href="pricing.htm" class="btn btn-primary">Start your Free Trial Today! <i class="icon-arrow-right"></i></a> </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@stop