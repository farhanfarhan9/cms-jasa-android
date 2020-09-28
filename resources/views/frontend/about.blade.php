@extends('frontend')

@section('content')
<div class="container-fluid">
	<br>
	<br>
	<div class="container py-md-5">
		<div class="banner-wrapper text-center">
			<h1 class="mb-4 title">Tentang Algotech</h1>
		</div>
	</div>
	<section class="w3l-aboutblock py-5" id="about">
	<div class="midd-w3">
		<div class="container py-lg-5 py-md-3">
			<div class="row">
				<div class="col-lg-6 left-wthree-img text-righ">
					<div class="position-relative">
					<img src="assets\images\business.png" alt="" class="img-fluid">
					<br /> <br /> <br />
					<img src="assets\images\main.jpg" alt="" class="img-fluid">
					<a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">	
						<span class="video-play-icon">
							<span class="fa fa-play"></span>
						</span>
					</a>
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<iframe src="#" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
				</div>
			</div>
</div>
<div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
	<h3 class="title-big">Jasa Pembuatan Website Dan Aplikasi</h3>
	<p class="mt-4">Algotech adalah sebuah perusahaan yang bergerak dibidang pelayanan teknologi informasi yang berdiri pada tanggal 1 Januari 2013. Algotech didirikan untuk membantu pengguna jasa informasi dalam hal memberikan solusi yang terbaik dalam bidang teknologi informasi dan memberikan sebuah gambaran bagaimana teknologi informasi dapat memberikan kontribusi yang banyak terhadap produktivitas perusahaan. </p>
	<p class="mt-4">Untuk mencapai tujuan tersebut kami lebih focus untuk memberikan solusi dari permasalahan yang ada dalam perusahaan. Dan kepuasan konsumen yang kami lihat bukan pada permasalahan saat ini saja, tetapi juga bagaimana membuat informasi teknologi yang ada dapat mencapai tujuan dari perusahaan tersebut.</p>
	<p class="mt-4">Kepercayaan konsumen merupakan asset yang berharga bagi kami. Untuk alasan tersebut kami akan selalu berintegrasi dan berkomitmen dalam hal kepuasan konsumen. Kami akan selalu meningkatkan pengetahuan dan keahlian kami untuk menjadi yang terdepan dalam hal teknologi informasi untuk mendukung tujuan kami yaitu kepuasan komsumen.</p>
	<ol class="w3l-right mt-4">
		<li>Codeihniter framework</li>
		<li>Bootstrap framework</li>
		<li>Ionic framework</li>
		<li>Highly Responsive</li>
		<li>Easy to Customize</li>
	</ol>
		</div>
	</div>
</div>
</div>
</section>
<section class="w3-about-2" id="features">
	<div class="w3-services-ab py-5">
		<div class="container py-lg-5 py-md-4">
				<h2 class="title-big text-center mb-5">How we work</h2>
				<div class="w3-services-grids">
					<div class="w3-services-right-grid">
				 		<div class="fea-gd-vv row">
							<div class="col-lg-6">
 								<div class="float-lt feature-gd">
									<div class="icon"> <span class="number number1">01.</span></div>
										<div class="icon-info">
										<h5>Client Menanyakan Jasa Dan Layanan</h5>
										<p>Client menanyakan tentang jasa dan layanan yang di berikan oleh algotech. </p>
					</div>
			</div>
</div>

<div class="col-lg-6 mt-lg-0 mt-4">
	<div class="float-mid feature-gd">
		<div class="icon"> <span class="number number2">02.</span></div>
        	<div class="icon-info">
			<h5>Meeting Pertama</h5>
			<p>Setelah melakukan diskusi tentang jasa dan layanan dengan team algotech, anda di minta untuk dapat meeting lebih lanjut. </p>
		</div>
	</div>
</div>
<div class="col-lg-6 mt-4 pt-md-2">
	<div class="float-rt feature-gd">
		<div class="icon"> <span class="number number3">03.</span></div>
			<div class="icon-info">
			<h5>Algotech Membuat Proposal Penawaran.</h5>
			<p>Apabila meeting antara client dan team algotech telah selesai di lakukan, maka . </p>
		</div>
	</div>
</div>
<div class="col-lg-6 mt-4 pt-md-2">
	<div class="float-lt feature-gd">
		<div class="icon"> <span class="number number4">04.</span></div>
			<div class="icon-info">
			<h5>Projek Mulai Di Kerjakan</h5>
			<p> Setelah melakukan final meeting, projek mulai di kerjakan oleh team Algotech dan tanda tangan kontrak sebelum memulai pekerjaan. </p>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>
</div>
</div>
</section>
@endsection