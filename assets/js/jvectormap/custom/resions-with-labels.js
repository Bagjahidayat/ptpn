$(function(){new jvm.Map({map:"us_aea",container:$("#resionsWithLabels"),zoomOnScroll:!1,zoomMin:1,hoverColor:!0,regionLabelStyle:{initial:{fill:"#ffffff"},hover:{fill:"black"}},regionStyle:{initial:{fill:"#002868"},hover:{"fill-opacity":.8}},backgroundColor:"#FFFFFF",labels:{regions:{render:function(a){var b=["US-RI","US-DC","US-DE","US-MD"];if(b.indexOf(a)===-1)return a.split("-")[1]},offsets:function(a){return{CA:[-10,10],ID:[0,40],OK:[25,0],LA:[-20,0],FL:[45,0],KY:[10,5],VA:[15,5],MI:[30,30],AK:[50,-25],HI:[25,50]}[a.split("-")[1]]}}}})});