<script src="<?php echo base_url('assets/js/highcharts.js'); ?>"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<?php 
// print_r($company_id);
// print_r($company_name);
// print_r($reviews);
 ?>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto">
    <div id="company_header">
        <div id="company_image"></div>
        <div id="company_short_info">
            <div id="conpany_title">
                <h1><?php echo $company_name; ?></h1>
            </div>
            <div id="rating_info">
                <h3>Rating: 4.6<?php //echo $overall_rating ?></h3>
            </div>
        </div>
    </div>
    <div id="content">
        <div id="reviews_graph"></div>
        <div id="reviews">
            <?php 
            foreach ($reviews as $key => $value) {
                echo "<h3>".$value."</h3>";
            }
             ?>
        </div>
    </div>
</div>

<script>
$(function () {
    $('#reviews_graph').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Company Reviews Data By Rating'
        },
        xAxis: {
            categories: ['5 star', '4 star', '3 star', '2 star', '1 star'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Reviews',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
                            // alert('Category: ' + this.category + ', value: ' + this.x);
                            if(this.x == 0){
                                // 5 star
                            } else if(this.x == 0){
                                // 4 star
                            } else if(this.x == 0){
                                // 3 star
                            } else if(this.x == 0){
                                // 2 star
                            } else {
                                // 1 star
                            }
                        }
                    }
                }
            }
        },
        series: [{
            name: 'Rating',
            data: [107, 31, 635, 203, 2]
        }]
    });
});
</script>