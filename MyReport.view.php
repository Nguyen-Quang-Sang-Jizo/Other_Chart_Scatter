<div style="width:75%;" id="report_render">
    <?php
    function randomScalingFactor()
    {
        return mt_rand(-100, 100);
    }

    function generateData()
    {
        $data = array();
        for ($i = 0; $i < 7; $i++) {
            array_push($data, array(
                'x' => randomScalingFactor(),
                'y' => randomScalingFactor()
            ));
        }
        return $data;
    }
    $data1 = generateData();
    $data2 = generateData();

    $datas = [
        ["dataFirstX" => $data1[0]['x'], "dataFirstY" => $data1[0]['y'], "dataSecondX" => $data2[0]['x'], "dataSecondY" => $data2[0]['y']],
        ["dataFirstX" => $data1[1]['x'], "dataFirstY" => $data1[1]['y'], "dataSecondX" => $data2[1]['x'], "dataSecondY" => $data2[1]['y']],
        ["dataFirstX" => $data1[2]['x'], "dataFirstY" => $data1[2]['y'], "dataSecondX" => $data2[2]['x'], "dataSecondY" => $data2[2]['y']],
        ["dataFirstX" => $data1[3]['x'], "dataFirstY" => $data1[3]['y'], "dataSecondX" => $data2[3]['x'], "dataSecondY" => $data2[3]['y']],
        ["dataFirstX" => $data1[4]['x'], "dataFirstY" => $data1[4]['y'], "dataSecondX" => $data2[4]['x'], "dataSecondY" => $data2[4]['y']],
        ["dataFirstX" => $data1[5]['x'], "dataFirstY" => $data1[5]['y'], "dataSecondX" => $data2[5]['x'], "dataSecondY" => $data2[5]['y']],
        ["dataFirstX" => $data1[6]['x'], "dataFirstY" => $data1[6]['y'], "dataSecondX" => $data2[6]['x'], "dataSecondY" => $data2[6]['y']],

    ];

    \koolreport\chartjs\ScatterChart::create(array(
        'dataSource' => $datas,
        "series" => array(
            array(
                "dataFirstX", "dataFirstY",
                array(
                    "label" => "My First dataset",
                    "backgroundColor" => 'rgba(255, 99, 132, 0.5)',
                    "borderColor" => 'rgb(255, 99, 132)'
                )
            ),
            array(
                "dataSecondX", "dataSecondY",
                array(
                    "label" => "My Second dataset",
                    "backgroundColor" => 'rgba(54, 162, 235, 0.5)',
                    "borderColor" => 'rgb(54, 162, 235)'
                )
            ),
        ),
        "options" => array(
            "title" => array(
                "display" => true,
                "text" => 'Chart.js Scatter Chart'
            )
        )
    ));
    ?>
</div>