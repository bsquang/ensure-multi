if (location.href.indexOf("1920") > 0) {
  $(".wrapper").addClass("display-1920");
}

var heightBARIMG = 217;
var totals = [
  
  {
    'name':'user01',
    'age':1989,
    'sex':'0',
    'pull':45    
  },  
  {
    'name':'user02',
    'age':1989,
    'sex':'0',
    'pull':45    
  },  
  {
    'name':'user03',
    'age':1989,
    'sex':'0',
    'pull':45    
  },  
  {
    'name':'user04',
    'age':1989,
    'sex':'0',
    'pull':45    
  },  
  {
    'name':'user05',
    'age':1989,
    'sex':'0',
    'pull':45    
  }
  
];

$(".box").fadeIn(500);
function startGame(){
  
  $("#btt-begin").hide();
  
  setTimeout(function(){
	
	$("#bgr-02").fadeIn();
	
	$("#list-input").show();
	$("#header-top").fadeIn();
	
	$(".info-box[bsq-id=1]").fadeIn(1000).css("display","inline-block");
	$(".info-box[bsq-id=2]").fadeIn(1000).css("display","inline-block");
	$(".info-box[bsq-id=3]").fadeIn(1000).css("display","inline-block");
	$(".info-box[bsq-id=4]").fadeIn(1000).css("display","inline-block");
	$(".info-box[bsq-id=5]").fadeIn(1000).css("display","inline-block");
	
  }, 500)
  
}

$(".user-name").bind('keyup',function(){
  
  var _val = $(this).val();
  
  var regex=/^[a-zA-Z]+$/;
  if (_val.match(regex))
  {
	  alert("Vui lòng nhập số!");	  
  }
  
})

$(".user-pull").bind('keyup',function(){
  
  var _val = $(this).val();
  
  var regex=/^[a-zA-Z]+$/;
  if (_val.match(regex))
  {
	  alert("Vui lòng nhập số!");	  
  }
  
  var bsqid = $(this).attr('bsq-id');
  if (bsqid == 2) {
	$("#btt-cal").fadeIn();
  }
  
})


var val_highest = 0;
var id_highest = 0;
function checkHIGHSCORE(index, val) {
  
  if (val > val_highest) {
	id_highest = index;
	val_highest = val;
  }
  
}

function bsqStringToNumber(content){
  
  return Number.parseFloat(content);
}
function reloadGame(){
  location.reload();
}


var user_pulls = [];
var user_pulls_female = [];
function calGame(){
  
  $(".info-box").fadeOut();
  
  for (var i = 0; i < 16; i++) {
	user_pulls[i] = null;
	user_pulls_female[i] = null;
  }
  
  for(var i=0;i<5;i++){
    
    var counter = i+1;
    
    var age = bsqStringToNumber($(".user-name[bsq-id="+counter+"]").val());
    var sex = bsqStringToNumber($(".user-gender[bsq-id="+counter+"]").val());
    var pull = bsqStringToNumber($(".user-pull[bsq-id="+counter+"]").val());
    
    
    
    if (age > 0 && sex >= 0 && pull > 0) {
      
      $(".info-box[bsq-id="+counter+"]").fadeIn();
      calBattery(counter-1);
      
      
    }else{
      
      
      
    }
  }
  
  $("#btt-cal").hide();
  $("#bgr-energy").fadeIn();
  $("#list-energy").show();
  $("#btt-info").fadeIn();
  
  $('#percent-bar-text-0' +(id_highest+1)).addClass("blink-ani")
  //$(".item-energy[bsq-id="+(id_highest+1)+"]").addClass("blink-ani")
  
  
  
}

function getAge(yearOfBirth) {
    var currentYear = new Date().getFullYear();
    return currentYear - (yearOfBirth);
}



function calBattery(idUser){  
  
  var user = totals[idUser];
  
  user.age = bsqStringToNumber($(".user-name[bsq-id="+(idUser+1)+"]").val());
  user.sex = bsqStringToNumber($(".user-gender[bsq-id="+(idUser+1)+"]").val());
  user.pull = bsqStringToNumber($(".user-pull[bsq-id="+(idUser+1)+"]").val());  
  
  var currentPull = user.pull;
  
  
  var age1 = ['11', '13', '15', '17', '19', '24', '29', '34', '39', '44', '49', '54', '59', '64', '69', '82'];
  var age = ['10-11', '12-13', '14-15', '16-17', '18-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-82'];
  
  var age_temp = getAge(user.age);  
  var user_pull_data = (user.pull);    
  
  var currentPOS = 0;
  
  for (var i = 0; i < age.length; i++) {
      if (age_temp <= age1[i]) {
        
        currentPOS = i;
		
		if (user.sex == 0) {
		  
		  user_pulls[i] = {
			y: user_pull_data,
			marker: {
			  symbol: 'url(resources/MARKER0'+(idUser+1)+'.png)'
			}
		  }
		  
		}else{
		  
		  user_pulls_female[i] = {
			y: user_pull_data,
			marker: {
			  symbol: 'url(resources/MARKER0'+(idUser+1)+'.png)'
			}
		  }
		  
		}
        
          
        break;
      } else {
          
      }
  }
    
  var weaks_male = [12.6,19.4,28.5,32.6,35.7,36.8,37.7,36.0,35.8,35.5,34.7,32.9,30.7,30.2,28.2,21.3];    
  var strongs_male = [22.4,31.2,44.3,52.4,55.5,56.6,57.5,55.8,55.6,55.3,54.5,50.7,48.5,48.0,44.0,35.1];
  var default_male = [];
  
  for(var i=0;i<weaks_male.length;i++){
    default_male[i] = (weaks_male[i]+strongs_male[i])/2;
  } 

  var weaks_female = [11.8,14.6,15.5,17.2,19.2,21.5,25.6,21.5,20.3,18.9,18.6,18.1,17.7,17.2,15.4,14.7];  
  var strongs_female = [21.6,24.4,27.3,29.0,31.0,35.3,41.4,35.3,34.1,32.7,32.4,31.9,31.5,31.0,27.2,24.5];
  var default_female = [];
  
  for(var i=0;i<weaks_female.length;i++){
    default_female[i] = (weaks_female[i]+strongs_female[i])/2;
  } 

  var strongs = [];          
  var weaks = [];
  var defaultPull = [];
  
  if (user.sex == '0') {
    strongs = strongs_male;
    weaks = weaks_male;
    defaultPull = default_male;
  }else if (user.sex == '1') {
    strongs = strongs_female;
    weaks = weaks_female;
    defaultPull = default_female;
  }
  
  var middlePULL = defaultPull[currentPOS];
  var maxPull = strongs[currentPOS];
  
  var percent = currentPull * 100 / maxPull;  
  
  
  var heightBAR;  
  if (percent < 100) {    
    heightBAR = heightBARIMG * percent / 100;    
  }else if (percent >= 100) {	
	percent = 100;	
    heightBAR = heightBARIMG;
  }
  
  checkHIGHSCORE(idUser, percent);
  
  var targetUSER = idUser + 1;
  
  $('.item-energy[bsq-id='+targetUSER+']').fadeIn(1000).css("display","inline-block");
  setTimeout(function(){
    $('.energy-item[bsq-id='+targetUSER+']').height(heightBAR);
  },300)
  
  
  $('#percent-bar-text-0' + targetUSER).hide();
  $('#percent-bar-text-0' + targetUSER).fadeIn(500);  
  $('#percent-bar-text-0' + targetUSER).text(Math.round(percent)+"%"); 
  
  
}

function backGame() {
  $("#info-panel").hide();  
  $("#btt-info").show();
  $("#btt-back").hide();
  $("#header-top").show();
}

var bMapCal = false;
function showMap(){
  
  if (!bMapCal) {

	var bMale = false;
	for (var i = 0; i < 16; i++) {
	  if(user_pulls[i] != null) {
		bMale = true;
		break;
	  }
	}
	if (bMale) {
	  drawMAP(0);
	}
	
	var bFemale = false;
	for (var i = 0; i < 16; i++) {
	  if(user_pulls_female[i] != null) {
		bFemale = true;
		break;
	  }
	}
	if (bFemale) {
	  drawMAP(1);
	}
	
	bMapCal = true;
  
  }else{
	
	
	
  }
  
  $("#info-panel").show();  
  $("#btt-info").hide();
  $("#btt-back").show();
  $("#header-top").hide();
}
function drawMAP(sex_type) {
  
  var user_pulls_chart;
  
  var divTarget;
  if (sex_type == 0) {
	divTarget= $("#container-pull");
	user_pulls_chart = user_pulls;
  }else{	
	divTarget= $("#container-pull2");
	user_pulls_chart = user_pulls_female;
  }
  
  divTarget.html('');
  
  var age = ['10-11', '12-13', '14-15', '16-17', '18-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-82'];
  
  var weaks_male = [12.6,19.4,28.5,32.6,35.7,36.8,37.7,36.0,35.8,35.5,34.7,32.9,30.7,30.2,28.2,21.3];    
  var strongs_male = [22.4,31.2,44.3,52.4,55.5,56.6,57.5,55.8,55.6,55.3,54.5,50.7,48.5,48.0,44.0,35.1];
  var default_male = [];
  
  for(var i=0;i<weaks_male.length;i++){
    default_male[i] = (weaks_male[i]+strongs_male[i])/2;
  } 

  var weaks_female = [11.8,14.6,15.5,17.2,19.2,21.5,25.6,21.5,20.3,18.9,18.6,18.1,17.7,17.2,15.4,14.7];  
  var strongs_female = [21.6,24.4,27.3,29.0,31.0,35.3,41.4,35.3,34.1,32.7,32.4,31.9,31.5,31.0,27.2,24.5];
  var default_female = [];
  
  for(var i=0;i<weaks_female.length;i++){
    default_female[i] = (weaks_female[i]+strongs_female[i])/2;
  } 

  var strongs = [];          
  var weaks = [];
  var defaultPull = [];
  
  if (sex_type == 0) {
    strongs = strongs_male;
    weaks = weaks_male;
    defaultPull = default_male;
  }else if (sex_type == 1) {
    strongs = strongs_female;
    weaks = weaks_female;
    defaultPull = default_female;
  }
  
  //divTarget.highcharts({
  //      chart: {
  //          type: 'spline'
  //      },
  //      title: {
  //          text: null
  //      },
  //      subtitle: {
  //          text: 'Source: WorldClimate.com'
  //      },
  //      xAxis: {
  //          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
  //              'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
  //      },
  //      yAxis: {
  //          title: {
  //              text: 'Temperature'
  //          },
  //          labels: {
  //              formatter: function () {
  //                  return this.value + '°';
  //              }
  //          }
  //      },
  //      tooltip: {
  //          crosshairs: true,
  //          shared: true
  //      },
  //      plotOptions: {
  //          spline: {
  //              marker: {
  //                  radius: 4,
  //                  lineColor: '#666666',
  //                  lineWidth: 1
  //              }
  //          }
  //      },
  //      series: [{
  //          name: 'Tokyo',
  //          marker: {
  //              symbol: 'square'
  //          },
  //          data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
  //              y: 26.5,
  //              marker: {
  //                  symbol: 'url(http://www.highcharts.com/demo/gfx/sun.png)'
  //              }
  //          }, 23.3, 18.3, 13.9, 9.6]
  //
  //      }, {
  //          name: 'London',
  //          marker: {
  //              symbol: 'diamond'
  //          },
  //          data: [{
  //              y: 3.9,
  //              marker: {
  //                  symbol: 'url(http://www.highcharts.com/demo/gfx/snow.png)'
  //              }
  //          }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
  //      }]
  //  });
  
  
  
  divTarget.highcharts({
		chart: {
			backgroundColor: 'transparent',
			type: 'spline'
		},
		title: {
			text: null,            
		},
	
		xAxis: {
			categories: age
		},
		yAxis: {
			max: 90,
			min: 0,
			title: {
				text: 'Lực kéo (KG)'
			},
			labels: {
				formatter: function() {
					return this.value;
				}
			}
		},
		tooltip: {
			enabled: true
		},
		plotOptions: {
			series: {
				marker: {
					enabled: true
				}
			},
			spline: {
				marker: {
					radius: 4,
					lineColor: '#666666',
					lineWidth: 1
				}
			}
		},
		series: [{
			name: 'Mạnh',
			data: strongs,
			color: '#32BF49'
	
		},{
			name: 'Bình thường',
			marker: {
				symbol: 'diamond'
			},
			data: defaultPull,
			color: '#0C2E59'
		},{
			name: 'Bạn',            
			data: user_pulls_chart,
			color: '#0C2E59'
			
		},{
			name: 'Yếu',
			marker: {
				symbol: 'diamond'
			},
			data: weaks,
			color: '#FF5362'
		}]
	}, function(chart){
	  
	//  var pos = user_pulls.length - 1;
	//  
	//  var pos_user = user_pull_data;
	//  var pos_strongs = strongs[pos];
	//  var pos_weaks = weaks[pos];
	//  
	//  var tempDIV = "Mạnh: " + pos_strongs;
	//  tempDIV += "<br>";
	//  tempDIV += "<b>Bạn: " + pos_user;
	//  tempDIV += "</b><br>";
	//  tempDIV += "Yếu: " + pos_weaks;
	//  
	//  if (oldPOINT > 0) {
	//	var point = chart.series[4].data[oldPOINTs.length-1];
	//	var position = {
	//	  'x':point.plotX + chart.plotLeft,
	//	  'y':point.plotY + chart.plotTop
	//	}
	//	chart.renderer.circle(position.x, position.y, 10).attr({
	//		fill: '#FCFFC5',
	//		stroke: 'black',
	//		'stroke-width': 1
	//	}).add();
	//	
	//	console.log(point);
	//	
	//	var posEnd = {'x':point.plotX+60, 'y':point.plotY +10};
	//	$('#container-pull').line(640, 190, posEnd.x, posEnd.y, {color:"red", zindex:999});
	//	
	//	//$('#container-pull').line(posEnd.x, posEnd.y, posEnd.x-10, posEnd.y-10, {color:"red", zindex:33});
	//	//$('#container-pull').line(posEnd.x, posEnd.y, posEnd.x+10, posEnd.y-10, {color:"red", zindex:33});
	//  }
	//  
	//
	//  var point = chart.series[2].data[pos];
	//  
	//  var text = chart.renderer.text(
	//	tempDIV,
	//	point.plotX + chart.plotLeft - 145,
	//	point.plotY + chart.plotTop).attr({ zIndex: 5 }).add();
	//  
	//  box = text.getBBox();
	//  
	//  
	//  var position = {
	//	'x':point.plotX + chart.plotLeft,
	//	'y':point.plotY + chart.plotTop
	//  }
	//	  
	//  chart.renderer.circle(position.x, position.y, 10).attr({
	//	  fill: '#FCFFC5',
	//	  stroke: 'black',
	//	  'stroke-width': 1
	//  }).add();
	//  
	//  var pos_box={
	//	'x':box.x - 5,
	//	'y':box.y - 5
	//  }
	//  
	//  chart.renderer.path(['M', position.x, position.y,
	//					   'L', pos_box.x, pos_box.y,
	//					   'L', pos_box.x, pos_box.y+10,
	//					   'L', position.x, position.y,
	//					   'Z'])
	//		.attr({
	//			'stroke-width': 1,
	//			stroke: 'gray',
	//			fill: '#FFFFEF'
	//		})
	//		.add();
	//  
	//  chart.renderer.rect(pos_box.x, pos_box.y, box.width + 10, box.height + 10, 5)
	//	  .attr({
	//		  'font-size':'16px',
	//		  fill: '#FFFFEF',
	//		  stroke: 'gray',
	//		  'stroke-width': 1,
	//		  zIndex: 4
	//	  })
	//	  .add();
	
	});
  
  divTarget.find("text").last().hide();
  divTarget.show();
  
}
