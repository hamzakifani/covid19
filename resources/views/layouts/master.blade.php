<!doctype html>
<html dir="rtl">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Title -->
        <title>MorocCOVID-19</title>
        <!-- Favicon -->
		<link rel="icon" href="https://covid-maroc19.herokuapp.com/assets/image/favicon.ico">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,800&display=swap" rel="stylesheet">
		
		<!-- Font Awesome Css -->
        <link rel="stylesheet" href="https://covid-maroc19.herokuapp.com/assets/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://covid-maroc19.herokuapp.com/assets/css/bootstrap.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="https://covid-maroc19.herokuapp.com/assets/css/style.css">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- start section navbar -->
        <div class="navbarFixed">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="logo text-center fix1">
                           <a href="#">moroccovid-19</a>
                       </div>
                   </div>
                   <div class="col-12">
                       <div class="info-nav text-left fix1">
                           <ul class="list-unstyled">
                               <li class="text-right">
                                   080 100 47 الرقم الاقتصادي "ألو اليقضة الوبائية" 47
                               </li>
							   <li>
								   ألو 141 للمساعدة الطبية الاستعجالية
                               </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End section navbar -->
		
        <!-- start section header -->
        <div class="header" style="height: 300px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="covid-19-item one text-center">
                            <h4>الحالات المؤكدة</h4>
                            <span>{{$Values['Cas_confirmés']}}</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="covid-19-item two text-center">
                            <h4>المتعافون</h4>
                            <span>{{$Values['Retablis']}}</span>
                        </div>
                    </div>
					<div class="col-lg-3 col-sm-6">
                        <div class="covid-19-item three text-center">
                            <h4>الوفيات</h4>
                            <span>{{$Values['Décédés']}}</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="covid-19-item four text-center">
                            <h4>الحالات المستبعدة</h4>
                            <span>{{$Values['Negative_tests']}}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End section header -->
		
        <!-- Start section About -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
		<section class="about">
			<div class="container">
				<div class="main-title">
					<h2>فيروس كورونا: ما أعراضه وكيف تقي نفسك منه؟</h2>
				</div>
				<div class="symptoms text-right">
					<h3>أعراض فيروس كورونا</h3>
					<p>يؤكد العلماء أن فيروس كورونا يحتاج إلى خمسة أيام في المتوسط لتظهر أعراضه التي تبدأ بحمى، متبوعة بسعال جاف، وبعد نحو أسبوع، يشعر المصاب بضيق في التنفس، ما يستدعي العلاج في المستشفى. ونادرا ما تأتي الأعراض في صورة عطس أو سيلان مخاط من الأنف.</p>
					<p>كما أن ظهور هذه الأعراض لا تعني بالضرورة أنك مصاب بالمرض، لأنها تشبه أعراض أنواع أخرى من الفيروسات مثل نزلات البرد والإنفلونزا. ويمكن أن يسبب فيروس كورونا، في حالات الإصابة الشديدة، الالتهاب الرئوي، ومتلازمة الالتهاب الرئوي الحاد، وقصور وظائف عدد من أعضاء الجسم وحتى الوفاة. ويعد كبار السن، والأشخاص الذين يعانون من أمراض مسبقة مثل الربو والسكري وأمراض القلب، هم الأكثر عرضة للإصابة بالفيروس.</p>
					<ul class="symptoms-list list-unstyled">
						<li><i class="fa fa-check"></i>حمى</li>
						<li><i class="fa fa-check"></i>سعال جاف</li>
						<li><i class="fa fa-check"></i>عطس</li>
						<li><i class="fa fa-check"></i>الصداع</li>
						<li><i class="fa fa-check"></i>ضيق في التنفس</li>
						<li><i class="fa fa-check"></i>الام العضلات والارهاق</li>
					</ul>
				</div>
				<div class="percautions text-right">
					<h3>نصائح للوقاية من فيروس كورونا</h3>
					<p>تقول منظمات الصحة العالمية إن غسل اليدين بشكل منتظم وشامل أمر بالغ الأهمية في المكافحة لتجنب العدوى بالمرض.</p>
					<p>وينصح الباحثون الأشخاص الذين يمكن أن ينقلوا العدوى - سواء كانت لديهم أعراض أو لا - بعزل أنفسهم لمدة 14 يومًا لتجنب انتشار الفيروس إلى الآخرين.</p>
					<p>وتوصي منظمة الصحة العالمية بالتالي:</p>
					<ul class="percautions-list list-unstyled">
						<li><i class="fa fa-check"></i>غسل اليدين جيدا، فبإمكان الصابون قتل الفيروسات.</li>
						<li><i class="fa fa-check"></i>تغطية الفم والأنف عند العطس أو السعال وغسل اليدين بعدها لمنع انتشار الفيروس.</li>
						<li><i class="fa fa-check"></i>تجنب لمس العينين والأنف والفم حال ملامسة اليد لسطح يُرجح وجود الفيروس عليه</li>
						<li><i class="fa fa-check"></i>لا تقترب من المصابين بالسعال أو العطس أو الحمى، إذ يمكن أن ينشروا جسيمات صغيرة تحتوى على الفيروس في الهواء. ويُفضل الابتعاد عنهم لمسافة متر واحد.</li>
					</ul>
				</div>
			</div>
		</section>
        <!-- End section About -->
	    
		<!-- Start section Info -->
		<section class="info">
			<div class="container">
				<div class="main-title">
					<h2>تقسيم الحالات حسب الجهات</h2>
				</div>
				<div class="info-boxes">
				@foreach($data_reg as $reg)
					<div class="info-box">
						<span>{{$reg['name_reg']}}</span>
						<span>{{$reg['Cases']}}</span>
					</div>
				@endforeach
				</div>
			</div>
		</section>
			<!-- End section Info -->

			<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://covid-maroc19.herokuapp.com/assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="https://covid-maroc19.herokuapp.com/assets/js/popper.min.js"></script>
        <script src="https://covid-maroc19.herokuapp.com/assets/js/bootstrap.min.js"></script>
		<script>
            $("body").css("padding-top", $(".navbarFixed").innerHeight());
            // $(".header").css("height", $(window).innerHeight() - $(".navbarFixed").innerHeight());
		</script>
	</body>

</html>