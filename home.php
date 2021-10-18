<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->
    <title>Vue I18n v9 Starter Template</title>
  </head>
  <body>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/vue-i18n@next"></script>

    <div class="wrapper" id="app">
      
       <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/invade-logo.svg" alt="INVADE" height="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <label>Lang.</label>
            <select v-model="$i18n.locale">
              <option value="en">English</option>
              <option value="ja">日本語</option>
            </select>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
      
      <div class="container-fluid mx-0 p-0">
        <section class="top-banner">
          <div class="logo">
            <h1><img src="images/invade-logo.svg" class="img-fluid" alt="INVADE インベード株式会社"></h1>
          </div>
        </section>
        <section class="part1">
          <div class="sect">
            <span>01</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about-our-company">
                  <div class="text">
                    <h6>What is INVADE Co., Ltd?</h6>
                    <h3><span>ABOUT</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                    <h5>{{ $t("about.concept") }}</h5>
                    <p>{{ $t("about.conceptBody") }}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                <div class="info py-5 px-0">
                  <dl>
                    <dt>会社名</dt>
                    <dd>インベード株式会社</dd>
                  </dl>
                  <dl>
                    <dt>事業内容</dt>
                    <dd>インターネット、携帯電話網、その他通信システムを利用したデジタルコンテンツの企画、デザイン、制作、運営及び販売業務
                    ウェブコンテンツに関する企画、デザイン、制作、運営業務
                    情報システムの研究および開発
                    各種イベントの企画、制作等
                    </dd>
                  </dl>
                  <dl>
                    <dt>開発実績：</dt>
                    <dd>
                      <div class="inner">
                        <dl>
                          <dt>2021年6月</dt>
                          <dd>KAMISMA BEAUTY<br>（カミカリスマ美容師予約サービス）</dd>
                        </dl>
                        <dl>
                          <dt>2021年7月</dt>
                          <dd>NILE<br>（全世界対応B2Bマッチングプラットフォーム）</dd>
                        </dl>
                      </div>
                    </dd>
                  </dl>   
                  <dl>
                    <dt>資本金</dt>
                    <dd>300万円</dd>
                  </dl>
                </div>
                <!-- <img src="images/world-map.png" alt="" class="img-fluid"> -->
              </div>
            </div>
          </div>
        </section>
        <section class="part2">
          <div class="sect">
            <span>02</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>Our Services</h6>
                    <h3><span>PROJECTS</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                
                <!-- <img src="images/world-map.png" alt="" class="img-fluid"> -->
              </div>
            </div>
            
            <div class="services">
              <div class="item">
                  <div class="img">
                    <img src="images/001-kamisma-beauty-logo.png" alt="KAMISMA Beauty" class="img-fluid">
                  </div>
                  <div class="title">
                    <h4>{{ $t("kmb.title") }}</h4>
                  </div>
                  <div class="type">
                    <h5>{{ $t("kmb.type") }}</h5>
                  </div>
                  <div class="body">
                    <p style="white-space:pre-wrap;">{{ $t("kmb.body") }}</p>
                  </div>
                  <div class="link">
                    <a class="to-link-btn" href="https://www.kamisma.com/">{{ $t("kmb.link") }}</a>
                    
                    <a class="btn-details" data-bs-toggle="modal" data-bs-target="#kamismaModal">
                      {{ $t("kmb.details") }}
                    </a>
                  </div>
              </div>
              <div class="item">
                  <div class="img">
                    <img src="images/002-nile-logo.png" alt="KAMISMA Beauty" class="img-fluid">
                  </div>
                  <div class="title">
                    <h4>{{ $t("nileBeauty.title") }}</h4>
                  </div>
                  <div class="type">
                    <h5>{{ $t("nileBeauty.type") }}</h5>
                  </div>
                  <div class="body">
                    <p style="white-space:pre-wrap;">{{ $t("nileBeauty.body") }}</p>
                  </div>
                  <div class="link">
                    <a class="to-link-btn" href="https://www.nile.inc/">{{ $t("nileBeauty.link") }}</a>
                  
                    <a class="btn-details" data-bs-toggle="modal" data-bs-target="#nileModal">
                      {{ $t("nileBeauty.details") }}
                    </a>
                    <!-- open modal -->
                    
                  </div>                 
              </div>

              <div class="item">
                  <div class="img">
                    <img src="images/003-kamismax.png" :alt="$t('kmx.title')" class="img-fluid">
                  </div>
                  <div class="title">
                    <h4>{{ $t("kmx.title") }}</h4>
                  </div>
                  <div class="type">
                    <h5>{{ $t("kmx.type") }}</h5>
                  </div>
                  <div class="body">
                    <p style="white-space:pre-wrap;">{{ $t("kmx.body") }}</p>
                  </div>
                  <div class="link">
                    <a class="to-link-btn" href="#">{{ $t("kmx.link") }}</a>
                    
                    <a class="btn-details" data-bs-toggle="modal" data-bs-target="#kmxModal">
                      {{ $t("kmx.details") }}
                    </a>
                  </div>
              </div>

              <!-- kamisma beauty modal -->
              <div class="modal fade" id="kamismaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $t("kmb.title") }}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/001-kamisma-beauty-logo.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/001-kamisma-beauty-logo.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/001-kamisma-beauty-logo.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                      </div>
                      <h5>{{ $t("kmb.type")}}</h5>
                      <p style="white-space:pre-wrap;">{{ $t("kmb.body") }}</p>
                      
                    </div>
                    <div class="modal-footer">
                      <a class="close-modal" data-bs-dismiss="modal">Close</a>
                      <a class="go-to-link-modal" href="https://www.kamisma.com/" target="_blank">{{$t("kmb.link")}}</a>
                      
                    </div>
                  </div>
                </div>
              </div>

              <!-- nile-beauty modal -->
              <div class="modal fade" id="nileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $t("nileBeauty.title") }}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/002-nile-logo.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/002-nile-logo.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/002-nile-logo.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                      </div>
                      <h5>{{ $t("nileBeauty.type")}}</h5>
                      <p style="white-space:pre-wrap;">{{ $t("nileBeauty.body") }}</p>
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/jVtl2kRIXls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                      <a  class="close-modal" data-bs-dismiss="modal">Close</a>
                      <a class="go-to-link-modal" href="https://beauty.nile.inc" target="_blank">{{$t("nileBeauty.link")}}</a>
                      
                    </div>
                  </div>
                </div>
              </div>

              <!-- kmax modal -->
              <div class="modal fade" id="kmxModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $t("kmx.title") }}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/003-kamismax.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/003-kamismax.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                        <div class="modal-images col-lg-4 col-8">
                          <img src="images/003-kamismax.png" class="img-fluid" alt="NILE INVADE CO. Ltd" >
                        </div>
                      </div>
                      <h5>{{ $t("kmx.type")}}</h5>
                      <p style="white-space:pre-wrap;">{{ $t("kmx.body") }}</p>
                      <!-- <a href="https://beauty.nile.inc/" target="_blank">{{$t("kmx.link")}}</a> -->
                    </div>
                    <div class="modal-footer">
                      <a class="close-modal" data-bs-dismiss="modal">Close</a>
                      <a class="go-to-link-modal" href="#" target="_blank">{{$t("kmx.link")}}</a>
                      
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </section>
        <section class="part3">
          <div class="sect">
            <span>03</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>Corporate</h6>
                    <h3><span>PROFILE</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="corporate-profile col-lg-6 col-md-6 col-sm-12 px-0">
                <div class="info">
                  <h3><span>{{ $t("corporate.comp") }}</span></h3>
                  <p>{{ $t("corporate.name") }}</p>

                  <h3>{{ $t("corporate.det") }}</h3>
                  <p style="white-space:pre-wrap;">{{ $t("corporate.details") }}</p>

                  <h3>開発実績：</h3>

                  <h3>{{ $t("corporate.cap") }}</h3>
                  <p>{{ $t("corporate.capital") }}</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="part4">
          <div class="sect">
            <span>04</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>NEWS</h6>
                    <h3><span>お知らせ</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
              </div>
            </div>
          </div>
          <div id="list" class="row">

          </div>
        </section>
        <section class="part5">
          <div class="sect">
            <span>04</span>
            <p>／</p>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="our-projects">
                  <div class="text">
                    <h6>CONTACT US</h6>
                    <h3><span>お問合せ</span></h3>
                    <!-- <h2>{{ $t("about.title") }}</h2> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
              </div>
            </div>
        
            <div class="container">
                <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
                <div>
                    <div class="block">
                    <label>お名前<span>※</span></label>
                    <input type="text" name="name" placeholder="山田太郎" value="">
                    </div>
                    <div class="block">
                    <label>ふりがな<span>※</span></label>
                    <input type="text" name="furigana" placeholder="やまだたろう" value="">
                    </div>
                    <div class="block">
                    <label>メールアドレス<span>※</span></label>
                    <input type="text" name="email" placeholder="info@invade.co.jp" value="">
                    </div>
                    <div class="block">
                    <label>電話番号</label>
                    <input type="text" name="tel" placeholder="0000000000" value="">
                    </div>
                    <div class="block">
                    <label>内容<span>※</span></label>
                    <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
                    </div>
                </div>

                <h6><span>※</span>は必須</h6>

                <div class="info-box col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 my-4">
                    <h2><span>お問い合わせに関する注意事項</span></h2>
                    <ul>
                    <li>ご記入いただいた個人情報は、お問い合わせへの回答、情報提供のために使用させていただきます。</li>
                    <li>個人情報を正しくご記入いただけない場合やお問い合わせ内容によっては、回答できない場合がございます。</li>
                    <li>お問い合わせ内容によっては、回答にお時間をいただく場合がございます。</li>
                    <li>回答はお客様個人宛に送るものですので、転載・転送等の二次利用は固くお断りいたします。</li>
                    </ul>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">確認画面へ</button>
                </div>


                </form>
            </div>
  
          </div>
        </section>
        
      </div>
      <!-- <div class="row">
        <div class="col-lg-6">
          <p>{{ $t("kmx.title") }}</p>
          <p style="white-space:pre-wrap;">{{ $t("kmx.body") }}</p>
        </div>
        <div class="col-lg-6">

        </div>
      </div> -->
    </div>
    <script>
      const { createApp } = Vue;
      const { createI18n } = VueI18n;

      const i18n = createI18n({
        locale: "ja",
        messages: {
          en: {
            about: {
              title: 'About Us',
              concept: 'CONCEPT',
              conceptBody: 'We aim to create a new business model,' + '\n' + 'Making Japanese Beauty Industry a GLOBAL STANDARD.' + '\n' + 'We create services in utilizing our experiences in the beauty and salon industry in Japan both as a manufacturer and a dealer, and creating new web services, with information technology and recent trends.',
              messageTitle: 'Message', 
              messageBody: 'Making our full use of the knowledge of the'
            },
            message: {
              // language: "Language",
              projects: "Projects"
            },
            kmb: {
              title: "KAMISMA BEAUTY",
              type: 'KAMISMA Reservation System',
              body: "KAMISMA BEAUTY is a reservation service between the customers and the salon/stylists that are praised as CHARISMA (charismatic). Just like France has Michelin Guide for food, Japan has KAMI CHARISMA for beauty salon.  In the newer edition, there are stylists that received the accolades, but hard to reserve, in which the reservation service is called KAMISMA BEAUTY. You can experience an exclusive menu as well.",
              link: "Go To the Site",
              details: "Read More",
            },
            nileBeauty: {
              title: 'NILE BEAUTY',
              type: 'B2B Business Matching Service',
              body: 'B2B Business Matching Service connecting businesses globally.' + '\n' + 'Until recently, the way we would gather information, negotiate, and do businesses were in-person.   With the reliance on Social Media and the emergence of 5G, the spread of information is rapidly changing as we would need to adjust to the global landscape of both business and society.  NILE matches between companies, company and individuals.  We aim to support long-lasting business relationships because of stumbling onto the products and services because of the use of internet.',
              link: "Go To the Site",
              details: "READ More",
            },
            kmx: {
              title: 'KAMISMAX',
              type: 'Streaming Educational Video Service',
              body: 'Making a new wave in the hair salon industry, set to be released in 2021、Will be releasing new videos which will create a new standard into the future.',
              link: "Go To the Site",
              details: "Read More",
            },
            corporate: {
              comp: 'Company Name',
              name: 'INVADE Co., Ltd.',
              det: 'Business',
              details: 'Planning, designing, production, operation and sales of of digital contents utilizing the internet, mobile device, and other telecommunication tools.' + '\n' + 'Also in planning, designing, production, operation of web contents and creating new informational systems.' + '\n' + 'Planning and production of events.',
              cap: 'Capital',
              capital: '~27,000 yen',
            },
          },
          ja: {
            about: {
              title: '会社概要',
              concept: 'CONCEPT',
              conceptBody: '新しいビジネスモデルの構築により、日本の美容を世界のスタンダードへ。',
            },
            message: {
              // language: "言語",
              projects: "実績"
            },
            kmb: {
              title: "KAMISMA BEAUTY",
              type: 'KAMISMA予約システム',
              body: 'KAMISMA BEAUTY(カミスマ ビューティー)はCharismaと評される美容師＆美容室とお客様を繋げる予約サービスです。' + '\n' + 'フランスには「食」のミシュランがありますが、日本には「美容」のKAMI CHARISMA(カミカリスマ)があります。カミカリスマ・ガイドブック最新版には、栄えある星を獲得した予約困難なスター美容師たちが勢ぞろい。そんな彼らの予約が取れる特化型サービスがKAMISMA BEAUTYです。幻の一枠などここでしか味わえない限定メニューを体験して頂けます。',
              link: "ページへ",
              details: "詳細へ",
            },
            nileBeauty: {
              title: 'NILE BEAUTY',
              type: 'オンライン国際展示会システム',
              body: '全世界対応のB2Bマッチングサービス（国際オンライン展示会システム）。' + '\n' + 'これまでは情報収集、商談、取引までビジネスの多くが対面によるものでした。そんな中、SNSの普及や5Gの登場により情報化社会の加速が急速に進み、ビジネスの在り方も変化していきます。 NILEは企業と企業、企業と個人が出会う場所をオンライン上で創出するB2Bマッチングサービスです。既存のサービスと一線を画す画期的なコンテンツを発信します。絞り込まれた情報を見るのではなく、オンラインだからこそ実現できる良質な「偶然の出会い」を提供し、長く続くビジネスをサポートいたします。',
              link: "ページへ",
              details: "詳細へ",
            },
            kmx: {
              title: 'KAMISMAX',
              type: 'オンライン教育動画配信サービス',
              body: 'ヘアサロン業界に一石を投じる、全く新しい仕掛けを2021年内にリリース予定。これからのスタンダードになる新しいカタチの動画コンテンツを発信いたします。 乞うご期待ください。',
              link: "ページへ",
              details: "詳細へ",
            },
            corporate: {
              comp: '会社名',
              name: 'インベード株式会社',
              det: '事業内容',
              details: 'インターネット、携帯電話網、その他通信システムを利用したデジタルコンテンツの企画、デザイン、制作、運営及び販売業務' + '\n' + 'ウェブコンテンツに関する企画、デザイン、制作、運営業務 情報システムの研究および開発 各種イベントの企画、制作等',
              cap: '資本金',
              capital: '300万円',
            }
          }
        },
      });

      const app = createApp({});
      app.use(i18n);
      app.mount("#app");
    </script>

    <script>

      let response = [];

      fetch("https://jnews.microcms.io/api/v1/news/?limit=50", {
              headers: {
                  "X-API-KEY": "2788fca6-1836-4e83-ae3c-c582735707d7"
              }
          })
          .then(function(res) {
              return res.json();
          })
          .then(function(json) {
            console.log(json);
              var fragment = document.createDocumentFragment();
              
              for (var i = 0; i < json.contents.length; i++) {

                
                  // console.log(json.contents);
                  response = json.contents;
                
                  console.log(response[i].body);
                  console.log(response[i].title);
                  // console.log(response[i].type.category);
                  console.log(response[i].createdAt.substring(0,10));
                 
            
                  var title = document.createElement('h2');
                  title.innerHTML = json.contents[i].title;

                  // var type = document.createElement('h5');
                  // type.className = json.contents[i].type[i].id;
                  // type.innerHTML = "<span>" + json.contents[i].type[i].category + "</span>";

                  var postDate = document.createElement('p');
                  postDate.innerHTML = json.contents[i].createdAt.substring(0,10);


                  var body = document.createElement('div');
                  body.className = "post-contents";
                  body.innerHTML = json.contents[i].body;
                  

                  var textContents = document.createElement('div');
                  textContents.className = "textContents col-md-4 col-sm-6";
                  textContents.appendChild(title);
                  // textContents.appendChild(type);
                  textContents.appendChild(postDate);
                  textContents.appendChild(body);

                  
                  console.log(textContents);

                 
                  

                  fragment.appendChild(textContents);
                  // console.log(fragment);
                  

                

              }
              document.getElementById('list').appendChild(fragment);
              
          })
    </script>
  </body>
</html>