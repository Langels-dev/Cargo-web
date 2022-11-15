<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

  $nombreUsuario = $_POST["name"];
  $apellidoUsuario = $_POST["srname"];
  $mensajeUsuario = $_POST["msg"];
  $correoUsuario = $_POST["correo"];

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sutovi200@gmail.com';                     //SMTP username
    $mail->Password   = 'vxutaohrugypdkry';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sutovi200@gmail.com', 'INTERSTATE WEB');
    $mail->addAddress('sutovi175@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail from Web form';
    $mail->Body    = "
    <!DOCTYPE html>

    <html
      lang='en'
      xmlns:o='urn:schemas-microsoft-com:office:office'
      xmlns:v='urn:schemas-microsoft-com:vml'
    >
      <head>
        <title></title>
        <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
        <meta content='width=device-width, initial-scale=1.0' name='viewport' />
        <!--[if mso
          ]><xml
            ><o:OfficeDocumentSettings
              ><o:PixelsPerInch>96</o:PixelsPerInch
              ><o:AllowPNG /></o:OfficeDocumentSettings></xml
        ><![endif]-->
        <!--[if !mso]><!-->
        <link
          href='https://fonts.googleapis.com/css?family=Roboto'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Abril+Fatface'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Merriweather'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Montserrat'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Nunito'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Bitter'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Permanent+Marker'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Roboto+Slab'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Cabin'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Oxygen'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Oswald'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Lato'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Ubuntu'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Open+Sans'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Droid+Serif'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Playfair+Display'
          rel='stylesheet'
          type='text/css'
        />
        <link
          href='https://fonts.googleapis.com/css?family=Poppins'
          rel='stylesheet'
          type='text/css'
        />
        <!--<![endif]-->
        <style>
          * {
            box-sizing: border-box;
          }
    
          body {
            margin: 0;
            padding: 0;
          }
    
          a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
          }
    
          #MessageViewBody a {
            color: inherit;
            text-decoration: none;
          }
    
          p {
            line-height: inherit;
          }
    
          .desktop_hide,
          .desktop_hide table {
            mso-hide: all;
            display: none;
            max-height: 0px;
            overflow: hidden;
          }
    
          @media (max-width: 755px) {
            .desktop_hide table.icons-inner {
              display: inline-block !important;
            }
    
            .icons-inner {
              text-align: center;
            }
    
            .icons-inner td {
              margin: 0 auto;
            }
    
            .fullMobileWidth,
            .row-content {
              width: 100% !important;
            }
    
            .mobile_hide {
              display: none;
            }
    
            .stack .column {
              width: 100%;
              display: block;
            }
    
            .mobile_hide {
              min-height: 0;
              max-height: 0;
              max-width: 0;
              overflow: hidden;
              font-size: 0px;
            }
    
            .desktop_hide,
            .desktop_hide table {
              display: table !important;
              max-height: none !important;
            }
    
            .row-2 .column-1 .block-1.paragraph_block td.pad {
              padding: 5px 30px !important;
            }
    
            .row-1 .column-1 .block-2.heading_block td.pad {
              padding: 10px 60px 30px !important;
            }
    
            .row-1 .column-1 .block-2.heading_block h1 {
              font-size: 33px !important;
            }
          }
        </style>
      </head>
      <body
        style='
          background-color: #ffc949;
          margin: 0;
          padding: 0;
          -webkit-text-size-adjust: none;
          text-size-adjust: none;
        '
      >
        <table
          border='0'
          cellpadding='0'
          cellspacing='0'
          class='nl-container'
          role='presentation'
          style='
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            background-color: #ffc949;
          '
          width='100%'
        >
          <tbody>
            <tr>
              <td>
                <table
                  align='center'
                  border='0'
                  cellpadding='0'
                  cellspacing='0'
                  class='row row-1'
                  role='presentation'
                  style='
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                    background-size: auto;
                  '
                  width='100%'
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          align='center'
                          border='0'
                          cellpadding='0'
                          cellspacing='0'
                          class='row-content stack'
                          role='presentation'
                          style='
                            mso-table-lspace: 0pt;
                            mso-table-rspace: 0pt;
                            background-size: auto;
                            background-color: #ffffff;
                            border-bottom: 0 solid #ffffff;
                            border-left: 0 solid #ffffff;
                            border-radius: 2px 2px 0 0;
                            border-right: 0px solid #ffffff;
                            border-top: 0 solid #ffffff;
                            color: #000000;
                            width: 735px;
                          '
                          width='735'
                        >
                          <tbody>
                            <tr>
                              <td
                                class='column column-1'
                                style='
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  font-weight: 400;
                                  text-align: left;
                                  vertical-align: top;
                                  padding-top: 0px;
                                  padding-bottom: 0px;
                                  border-top: 0px;
                                  border-right: 0px;
                                  border-bottom: 0px;
                                  border-left: 0px;
                                '
                                width='100%'
                              >
                                <table
                                  border='0'
                                  cellpadding='0'
                                  cellspacing='0'
                                  class='image_block block-1'
                                  role='presentation'
                                  style='
                                    mso-table-lspace: 0pt;
                                    mso-table-rspace: 0pt;
                                  '
                                  width='100%'
                                >
                                  <tr>
                                    <td
                                      class='pad'
                                      style='
                                        padding-bottom: 55px;
                                        padding-top: 40px;
                                        width: 100%;
                                        padding-right: 0px;
                                        padding-left: 0px;
                                      '
                                    >
                                      <div
                                        align='center'
                                        class='alignment'
                                        style='line-height: 10px'
                                      >
                                        <img
                                          alt='Social profile'
                                          class='fullMobileWidth'
                                          src='https://scontent.fbrm1-1.fna.fbcdn.net/v/t1.15752-9/315226923_1290834908337715_5799590903706699588_n.png?stp=dst-png_s2048x2048&_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_ohc=j9EnqWHFrtAAX8I6n45&_nc_ht=scontent.fbrm1-1.fna&oh=03_AdSAlW9OioEHMQtOhMkH1-scWap7L5qrOCw-ZR0ANaxXAg&oe=63961756'
                                          style='
                                            display: block;
                                            height: auto;
                                            border: 0;
                                            width: 478px;
                                            max-width: 100%;
                                          '
                                          title='Social profile'
                                          width='478'
                                        />
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                                <table
                                  border='0'
                                  cellpadding='0'
                                  cellspacing='0'
                                  class='heading_block block-2'
                                  role='presentation'
                                  style='
                                    mso-table-lspace: 0pt;
                                    mso-table-rspace: 0pt;
                                  '
                                  width='100%'
                                >
                                  <tr>
                                    <td
                                      class='pad'
                                      style='
                                        padding-bottom: 30px;
                                        padding-left: 60px;
                                        padding-right: 60px;
                                        padding-top: 30px;
                                        text-align: center;
                                        width: 100%;
                                      '
                                    >
                                      <h1
                                        style='
                                          margin: 0;
                                          color: #4c4d55;
                                          direction: ltr;
                                          font-family: Poppins, Arial, Helvetica,
                                            sans-serif;
                                          font-size: 23px;
                                          font-weight: 700;
                                          letter-spacing: normal;
                                          line-height: 150%;
                                          text-align: center;
                                          margin-top: 0;
                                          margin-bottom: 0;
                                        '
                                      >
                                        <span class='tinyMce-placeholder'
                                          >Message from: $nombreUsuario $apellidoUsuario  - $correoUsuario</span
                                        >
                                      </h1>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  align='center'
                  border='0'
                  cellpadding='0'
                  cellspacing='0'
                  class='row row-2'
                  role='presentation'
                  style='mso-table-lspace: 0pt; mso-table-rspace: 0pt'
                  width='100%'
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          align='center'
                          border='0'
                          cellpadding='0'
                          cellspacing='0'
                          class='row-content stack'
                          role='presentation'
                          style='
                            mso-table-lspace: 0pt;
                            mso-table-rspace: 0pt;
                            background-color: #ffffff;
                            color: #000000;
                            border-radius: 0 0 15px 15px;
                            width: 735px;
                          '
                          width='735'
                        >
                          <tbody>
                            <tr>
                              <td
                                class='column column-1'
                                style='
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  font-weight: 400;
                                  text-align: left;
                                  vertical-align: top;
                                  padding-top: 0px;
                                  padding-bottom: 30px;
                                  border-top: 0px;
                                  border-right: 0px;
                                  border-bottom: 0px;
                                  border-left: 0px;
                                '
                                width='100%'
                              >
                                <table
                                  border='0'
                                  cellpadding='0'
                                  cellspacing='0'
                                  class='paragraph_block block-1'
                                  role='presentation'
                                  style='
                                    mso-table-lspace: 0pt;
                                    mso-table-rspace: 0pt;
                                    word-break: break-word;
                                  '
                                  width='100%'
                                >
                                  <tr>
                                    <td
                                      class='pad'
                                      style='
                                        padding-bottom: 5px;
                                        padding-left: 60px;
                                        padding-right: 60px;
                                        padding-top: 5px;
                                      '
                                    >
                                      <div
                                        style='
                                          color: #878787;
                                          direction: ltr;
                                          font-family: Poppins, Arial, Helvetica,
                                            sans-serif;
                                          font-size: 16px;
                                          font-weight: 400;
                                          letter-spacing: 0px;
                                          line-height: 120%;
                                          text-align: center;
                                          mso-line-height-alt: 19.2px;
                                        '
                                      >
                                        <p style='margin: 0'>
                                          $mensajeUsuario
                                        </p>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  align='center'
                  border='0'
                  cellpadding='0'
                  cellspacing='0'
                  class='row row-3'
                  role='presentation'
                  style='mso-table-lspace: 0pt; mso-table-rspace: 0pt'
                  width='100%'
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          align='center'
                          border='0'
                          cellpadding='0'
                          cellspacing='0'
                          class='row-content stack'
                          role='presentation'
                          style='
                            mso-table-lspace: 0pt;
                            mso-table-rspace: 0pt;
                            background-color: #ffc949;
                            color: #000000;
                            width: 735px;
                          '
                          width='735'
                        >
                          <tbody>
                            <tr>
                              <td
                                class='column column-1'
                                style='
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  font-weight: 400;
                                  text-align: left;
                                  vertical-align: top;
                                  padding-top: 25px;
                                  padding-bottom: 25px;
                                  border-top: 0px;
                                  border-right: 0px;
                                  border-bottom: 0px;
                                  border-left: 0px;
                                '
                                width='100%'
                              >
                                <table
                                  border='0'
                                  cellpadding='20'
                                  cellspacing='0'
                                  class='text_block block-1'
                                  role='presentation'
                                  style='
                                    mso-table-lspace: 0pt;
                                    mso-table-rspace: 0pt;
                                    word-break: break-word;
                                  '
                                  width='100%'
                                >
                                  <tr>
                                    <td class='pad'>
                                      <div style='font-family: sans-serif'>
                                        <div
                                          class=''
                                          style='
                                            font-size: 12px;
                                            font-family: Poppins, Arial, Helvetica,
                                              sans-serif;
                                            mso-line-height-alt: 18px;
                                            color: #fafafa;
                                            line-height: 1.5;
                                          '
                                        >
                                          <p
                                            style='
                                              margin: 0;
                                              font-size: 10px;
                                              text-align: center;
                                              mso-line-height-alt: 15px;
                                            '
                                          >
                                            <span style='font-size: 10px'
                                              ><span style=''
                                                >© 2022 INTERSTATE. </span
                                              ></span
                                            ><span style='font-size: 10px'
                                              ><span style=''>
                                                All Rights Reserved.</span
                                              ></span
                                            >
                                          </p>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table
                  align='center'
                  border='0'
                  cellpadding='0'
                  cellspacing='0'
                  class='row row-4'
                  role='presentation'
                  style='mso-table-lspace: 0pt; mso-table-rspace: 0pt'
                  width='100%'
                >
                  <tbody>
                    <tr>
                      <td>
                        <table
                          align='center'
                          border='0'
                          cellpadding='0'
                          cellspacing='0'
                          class='row-content stack'
                          role='presentation'
                          style='
                            mso-table-lspace: 0pt;
                            mso-table-rspace: 0pt;
                            color: #000000;
                            width: 735px;
                          '
                          width='735'
                        >
                          <tbody>
                            <tr>
                              <td
                                class='column column-1'
                                style='
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  font-weight: 400;
                                  text-align: left;
                                  vertical-align: top;
                                  padding-top: 5px;
                                  padding-bottom: 5px;
                                  border-top: 0px;
                                  border-right: 0px;
                                  border-bottom: 0px;
                                  border-left: 0px;
                                '
                                width='100%'
                              >
                                <table
                                  border='0'
                                  cellpadding='0'
                                  cellspacing='0'
                                  class='icons_block block-1'
                                  role='presentation'
                                  style='
                                    mso-table-lspace: 0pt;
                                    mso-table-rspace: 0pt;
                                  '
                                  width='100%'
                                >
                                  <tr>
                                    <td
                                      class='pad'
                                      style='
                                        vertical-align: middle;
                                        color: #9d9d9d;
                                        font-family: inherit;
                                        font-size: 15px;
                                        padding-bottom: 5px;
                                        padding-top: 5px;
                                        text-align: center;
                                      '
                                    >
                                      <table
                                        cellpadding='0'
                                        cellspacing='0'
                                        role='presentation'
                                        style='
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                        '
                                        width='100%'
                                      >
                                        <tr>
                                          <td
                                            class='alignment'
                                            style='
                                              vertical-align: middle;
                                              text-align: center;
                                            '
                                          >
                                            <!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
                                            <!--[if !vml]><!-->
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- End -->
      </body>
    </html>";

    $mail->send();
    echo 'email sent';
} catch (Exception $e) {
    echo 'the mail cannot be sent ' . $mail->ErrorInfo;
}