<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="viewport" content="initial-scale=1, user-scalable=no">
        
      <title>Nutrition-MULTI</title>
      
      <link rel="stylesheet" media="all" href="css.css?89">      
      
    
    </head>
    <body>
      
      <div class='wrapper'>
        
        <div class='box' style='background: url("resources/BGR.png"); width: 1366px; height: 768px; display: none;'>
          
          <div id='bgr-02' style='background: url("resources/BGR02.png"); width: 1366px; height: 768px; position: absolute; z-index: 0; display:none'></div>
          
          <div class='bsq-row' id='header-top' style='text-align: center;padding-top: 20px;display: none; z-index: 1; position: absolute'>
            <img src='resources/HEADER.png' />
          </div>
          
          <div class='bsq-row group' id='list-input' style='width: 100%;margin: auto;text-align: center; display: none; position: absolute; top: 80px;'>
            
            <div class='col-20 col-inline-block col-center info-box' bsq-id='1' style='position: relative; display: none;'>
              <img src='resources/BOX01.png' />
              <input class='user-name' bsq-id='1' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='1' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='1' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            
            <div class='col-20 col-inline-block col-center info-box' bsq-id='2' style='position: relative; display: none;'>
              <img src='resources/BOX02.png' />
              <input class='user-name' bsq-id='2' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='2' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='2' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            
            <div class='col-20 col-inline-block col-center info-box' bsq-id='3' style='position: relative; display: none;'>
              <img src='resources/BOX03.png' />
              <input class='user-name' bsq-id='3' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='3' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='3' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            
            <div class='col-20 col-inline-block col-center info-box' bsq-id='4' style='position: relative; display: none;'>
              <img src='resources/BOX04.png' />
              <input class='user-name' bsq-id='4' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='4' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='4' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            
            <div class='col-20 col-inline-block col-center info-box' bsq-id='5' style='position: relative; display: none;'>
              <img src='resources/BOX05.png' />
              <input class='user-name' bsq-id='5' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='5' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='5' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
          </div>
          
          <div class='bsq-row' id='btt-cal' style='top: 380px; text-align: center;position: absolute; display: none;'>
            <img src='resources/BTT-CAL.png' onclick='calGame()' />
          </div>
          <div class='bsq-row' id='btt-begin' style='top: 290px; text-align: center;position: absolute; '>
            <img src='resources/BTT-BEGIN.png' onclick='startGame()' />
          </div>
          
          <div class='bsq-row' id='bgr-energy' style='top: 308px;text-align: center;position: absolute; display: none;'>
            <img src='resources/BGR-ENERGY.png' />
          </div>
          
          <div class='bsq-row group' id='list-energy' style='  width: 100%;  position: absolute;   top: 320px; display: none; text-align:center'>
            
            <div class='col-20 col-inline-block col-center item-energy' bsq-id='1' style='display: none;'>
              <div class='energy-bar'>
                <div class='energy-item animated' bsq-id='1'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-01'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-inline-block col-center item-energy' bsq-id='2' style='display: none;'>
              <div class='energy-bar'>
                <div class='energy-item animated' bsq-id='2'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-02'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-inline-block col-center item-energy' bsq-id='3' style='display: none;'>
              <div class='energy-bar'>
                <div class='energy-item animated' bsq-id='3'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-03'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-inline-block col-center item-energy' bsq-id='4' style='display: none;'>
              <div class='energy-bar'>
                <div class='energy-item animated' bsq-id='4'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-04'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-inline-block col-center item-energy' bsq-id='5' style='display: none;'>
              <div class='energy-bar'>
                <div class='energy-item animated' bsq-id='5'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-05'>30%</p>
                </div>
              </div>              
            </div>
          </div>
          
          <div id='info-panel' style='position: absolute; left: 0; top: 0; width: 1366px; height: 768px; background: white; display: none;'>
            <div id="container-pull"></div>
            <div id="container-pull2"></div>
          </div>
          
          
          <div class='bsq-row' id='btt-info' style='position: absolute;bottom: 110px;text-align: right;padding-right: 150px; display: none; z-index: 99'>
            <img src='resources/BTT-INFO.png' onclick='showMap()' />
          </div>
          <div class='bsq-row' id='btt-back' style='position: absolute;bottom: 110px;text-align: right;padding-right: 150px; display: none; z-index: 99'>
            <img src='resources/BTT-BACK.png' onclick='backGame()' />
          </div>
          
          <div class='bsq-row' style='text-align: center;position: absolute; z-index: 1;  bottom: -4px;'>
            <img src='resources/FOOTER.png' />
          </div>
          
          <div style='position: absolute; right: 0; bottom: 0; width: 140px; height: 80px; z-index: 999;' onclick='reloadGame()'></div>
          
        </div>
        
      </div>
      
      <script src='jquery.js?89'></script>
      
      <script src="resources/highcharts/highcharts.js"></script>
      <script src="resources/highcharts/highcharts-3d.js"></script>
      <script src="resources/highcharts/exporting.js"></script>    
      
      <script src='game.js?89'></script>
      
    </body>
  </html>