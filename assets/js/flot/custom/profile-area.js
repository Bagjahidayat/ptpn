$(function(){var a,b;a=[[1262304e6,189],[12649824e5,560],[12674016e5,880],[127008e7,1270],[1272672e6,1260],[12753504e5,2325],[12779424e5,1885],[12806208e5,2260],[12832992e5,3100],[12858912e5,3240],[12885696e5,4320],[12911616e5,3820]],data=[{label:"Development Activity",data:a}],b={xaxis:{min:new Date(2009,11,1).getTime(),max:new Date(2010,11,1).getTime(),mode:"time",tickSize:[2,"month"],monthNames:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],tickLength:1},yaxis:{},series:{stack:!0,lines:{show:!0,fill:!0,lineWidth:2,fillColor:{colors:[{opacity:.1},{opacity:.6}]}},points:{show:!0,radius:5,fill:!0,fillColor:"#ffffff",lineWidth:2}},grid:{hoverable:!0,clickable:!0,borderWidth:1,tickColor:"#eaf3fb",borderColor:"#eaf3fb"},legend:{show:!0,position:"nw"},shadowSize:0,tooltip:!0,tooltipOpts:{content:"%s: %y"},colors:["#009688"]};var c=$("#area-chart3");c.length&&$.plot(c,data,b)});