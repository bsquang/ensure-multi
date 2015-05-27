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
        
        <div class='box' style='background: url("resources/BGR.png"); width: 1366px; height: 768px;'>
          
          <div class='bsq-row' style='text-align: center;padding-top: 20px;'>
            <img src='resources/HEADER.png' />
          </div>
          
          <div class='bsq-row group' style='width: 80%; margin: 5px auto;'>
            
            <div class='col-20 col-left col-center' style='position: relative'>
              <img src='resources/BOX01.png' />
              <input class='user-name' bsq-id='1' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='1' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='1' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            
            <div class='col-20 col-left col-center' style='position: relative'>
              <img src='resources/BOX02.png' />
              <input class='user-name' bsq-id='2' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='2' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='2' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            <div class='col-20 col-left col-center' style='position: relative'>
              <img src='resources/BOX03.png' />
              <input class='user-name' bsq-id='3' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='3' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='3' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            <div class='col-20 col-left col-center' style='position: relative'>
              <img src='resources/BOX04.png' />
              <input class='user-name' bsq-id='4' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='4' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='4' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
            <div class='col-20 col-left col-center' style='position: relative'>
              <img src='resources/BOX05.png' />
              <input class='user-name' bsq-id='5' type='text' placeholder='Nhập năm sinh' style='  position: absolute;left: 39px;top: 68px;width: 65%;font-size: 14px;text-align: center;' />              
              <select class='user-gender' bsq-id='5' style='position: absolute;left: 39px;top: 111px;width: 65%;height: 24px;'>
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
              </select>              
              <input class='user-pull' bsq-id='5' type='text' placeholder='Nhập lực kéo' style='  position: absolute;left: 39px;top: 154px;width: 65%;font-size: 14px;text-align: center;' />
            </div>
          </div>
          
          <div class='bsq-row' id='btt-cal' style='margin-top: 40px; text-align: center;position: absolute; '>
            <img src='resources/BTT-CAL.png' onclick='calGame()' />
          </div>
          
          <div class='bsq-row' id='bgr-energy' style='top: 308px;text-align: center;position: absolute; display: none;'>
            <img src='resources/BGR-ENERGY.png' />
          </div>
          
          <div class='bsq-row group' id='list-energy' style='  width: 80%;  position: absolute;  left: 136px;  top: 320px; display: none'>
            
            <div class='col-20 col-left col-center'>
              <div class='energy-bar' bsq-id='1' style='display: none;'>
                <div class='energy-item animated' bsq-id='1'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-01'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-left col-center'>
              <div class='energy-bar' bsq-id='2' style='display: none;'>
                <div class='energy-item animated' bsq-id='2'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-02'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-left col-center'>
              <div class='energy-bar' bsq-id='3' style='display: none;'>
                <div class='energy-item animated' bsq-id='3'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-03'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-left col-center'>
              <div class='energy-bar' bsq-id='4' style='display: none;'>
                <div class='energy-item animated' bsq-id='4'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-04'>30%</p>
                </div>
              </div>              
            </div>
            
            <div class='col-20 col-left col-center'>
              <div class='energy-bar' bsq-id='5' style='display: none;'>
                <div class='energy-item animated' bsq-id='5'>
                  <p style='position: absolute;top: 0;color: white;left:50%;top:5px;-webkit-transform: translateX(-50%);
                  text-shadow: 1px 1px 1px #000;font-weight: bold;  font-size: 24px;' id='percent-bar-text-05'>30%</p>
                </div>
              </div>              
            </div>
          </div>
          
          <div class='bsq-row' style='position: absolute;bottom: 110px;text-align: right;padding-right: 150px;'>
            <img src='resources/BTT-INFO.png' />
          </div>
          
          <div class='bsq-row' style='text-align: center;position: absolute;  bottom: -4px;'>
            <img src='resources/FOOTER.png' />
          </div>
        </div>
        
      </div>
      
      <script src='jquery.js?89'></script>
      <script src='game.js?89'></script>
      
    </body>
  </html>