
<script type="text/javascript">
    var options={series:[{name:"Charged",type:"line",data:[<?php foreach ($record as $value) {?><?php echo "'".$value->revenue."',"?><?php }?>]},{name:"Earned ETB",data:[<?php foreach ($record as $value) {?><?php echo "'".(($value->revenue)*2)."',"?><?php }?>],type:"area"},{name:"Lost ETB",type:"line",data:[<?php foreach ($record as $value) {?><?php echo "'".(($sub_count-$value->revenue)*2)."',"?><?php }?>]}],chart:{height:260,type:"line",toolbar:{show:!1},zoom:{enabled:!1}},colors:["#f0b503","#3b5de7","#f51202"],dataLabels:{enabled:!1},stroke:{curve:"smooth",width:"3",dashArray:[4,0]},markers:{size:3},xaxis:{categories:[<?php foreach ($record as $value) {?><?php echo "'".$value->cur_date."',"?><?php }?>],title:{text:"Month"}},fill:{type:"solid",opacity:[1,.1]},legend:{position:"top",horizontalAlign:"right"}},chart=new ApexCharts(document.querySelector("#line-chart"),options);
chart.render();
options={series:[{name:"Series A",data:[11,17,15,15,21,14]},{name:"Series B",data:[13,23,20,8,13,27]},{name:"Series C",data:[44,55,41,67,22,43]}],chart:{type:"bar",height:260,stacked:!0,toolbar:{show:!1},zoom:{enabled:!0}},plotOptions:{bar:{horizontal:!1,columnWidth:"20%",endingShape:"rounded"}},dataLabels:{enabled:!1},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun"]},colors:["#eef3f7","#ced6f9","#3b5de7"],fill:{opacity:1}};
(chart=new ApexCharts(document.querySelector("#column-chart"),options)).render();
options={series:[38,26,14],chart:{height:245,type:"donut"},labels:["Online","Offline","Marketing"],plotOptions:{pie:{donut:{size:"75%"}}},legend:{show:!1},colors:["#3b5de7","#45cb85","#eeb902"]};
(chart=new ApexCharts(document.querySelector("#donut-chart"),options)).render();options={series:[{name:"Series A",data:[[2,5],[7,2],[4,3],[5,2],[6,1],[1,3],[2,7],[8,0],[9,8],[6,0],[10,1]]},{name:"Series B",data:[[15,13],[7,11],[5,8],[9,17],[11,4],[14,12],[13,14],[8,9],[4,13],[7,7],[5,8],[4,3]]}],chart:{height:225,type:"scatter",toolbar:{show:!1},zoom:{enabled:!0,type:"xy"}},colors:["#3b5de7","#45cb85"],xaxis:{tickAmount:10},legend:{position:"top"},yaxis:{tickAmount:7}};
(chart=new ApexCharts(document.querySelector("#scatter-chart"),options)).render(),$("#usa-vectormap").vectorMap({map:"us_merc_en",backgroundColor:"transparent",regionStyle:{initial:{fill:"#556ee6"}},markerStyle:{initial:{r:9,fill:"#556ee6","fill-opacity":.9,stroke:"#fff","stroke-width":7,"stroke-opacity":.4},hover:{stroke:"#fff","fill-opacity":1,"stroke-width":1.5}}});
</script>