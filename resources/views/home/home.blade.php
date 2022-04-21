@extends('layouts.app')
@section('content')
<div class="container w-full max-w-6xl mx-auto px-2 py-8">
	<!-- ====== About Section Start -->
	<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
		<div class="container">
			<div class="flex flex-wrap justify-between items-center -mx-4">
				<div class="w-full lg:w-6/12 px-4">
					<div class="flex items-center -mx-3 sm:-mx-4">
					<div class="w-full xl:w-1/2 px-3 sm:px-4">
						<div class="py-3 sm:py-4">
							<img
								src="{{ secure_asset('img/terrain.jpg') }}"
								alt=""
								class="rounded-2xl w-full"
								/>
						</div>
						<div class="py-3 sm:py-4">
							<img
								src="{{ secure_asset('img/test.jpg') }}"
								alt=""
								class="rounded-2xl w-full"
								/>
						</div>
					</div>
					<div class="w-full xl:w-1/2 px-3 sm:px-4">
						<div class="my-4 relative z-10">
							<img
								src="{{ secure_asset('img/affiche_tcm.jpg') }}"
								alt=""
								class="rounded-2xl w-full"
								/>
							<span class="absolute -right-7 -bottom-7 z-[-1]">
								<svg
								width="134"
								height="106"
								viewBox="0 0 134 106"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
								>
								<circle
									cx="1.66667"
									cy="104"
									r="1.66667"
									transform="rotate(-90 1.66667 104)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="104"
									r="1.66667"
									transform="rotate(-90 16.3333 104)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="104"
									r="1.66667"
									transform="rotate(-90 31 104)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="104"
									r="1.66667"
									transform="rotate(-90 45.6667 104)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3334"
									cy="104"
									r="1.66667"
									transform="rotate(-90 60.3334 104)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="104"
									r="1.66667"
									transform="rotate(-90 88.6667 104)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="104"
									r="1.66667"
									transform="rotate(-90 117.667 104)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="104"
									r="1.66667"
									transform="rotate(-90 74.6667 104)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="104"
									r="1.66667"
									transform="rotate(-90 103 104)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="104"
									r="1.66667"
									transform="rotate(-90 132 104)"
									fill="#3056D3"
									/>
								<circle
									cx="1.66667"
									cy="89.3333"
									r="1.66667"
									transform="rotate(-90 1.66667 89.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="89.3333"
									r="1.66667"
									transform="rotate(-90 16.3333 89.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="89.3333"
									r="1.66667"
									transform="rotate(-90 31 89.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="89.3333"
									r="1.66667"
									transform="rotate(-90 45.6667 89.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3333"
									cy="89.3338"
									r="1.66667"
									transform="rotate(-90 60.3333 89.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="89.3338"
									r="1.66667"
									transform="rotate(-90 88.6667 89.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="89.3338"
									r="1.66667"
									transform="rotate(-90 117.667 89.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="89.3338"
									r="1.66667"
									transform="rotate(-90 74.6667 89.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="89.3338"
									r="1.66667"
									transform="rotate(-90 103 89.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="89.3338"
									r="1.66667"
									transform="rotate(-90 132 89.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="1.66667"
									cy="74.6673"
									r="1.66667"
									transform="rotate(-90 1.66667 74.6673)"
									fill="#3056D3"
									/>
								<circle
									cx="1.66667"
									cy="31.0003"
									r="1.66667"
									transform="rotate(-90 1.66667 31.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 16.3333 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="31.0003"
									r="1.66667"
									transform="rotate(-90 16.3333 31.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 31 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="31.0003"
									r="1.66667"
									transform="rotate(-90 31 31.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 45.6667 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="31.0003"
									r="1.66667"
									transform="rotate(-90 45.6667 31.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3333"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 60.3333 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3333"
									cy="30.9998"
									r="1.66667"
									transform="rotate(-90 60.3333 30.9998)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 88.6667 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="30.9998"
									r="1.66667"
									transform="rotate(-90 88.6667 30.9998)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 117.667 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="30.9998"
									r="1.66667"
									transform="rotate(-90 117.667 30.9998)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 74.6667 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="30.9998"
									r="1.66667"
									transform="rotate(-90 74.6667 30.9998)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 103 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="30.9998"
									r="1.66667"
									transform="rotate(-90 103 30.9998)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="74.6668"
									r="1.66667"
									transform="rotate(-90 132 74.6668)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="30.9998"
									r="1.66667"
									transform="rotate(-90 132 30.9998)"
									fill="#3056D3"
									/>
								<circle
									cx="1.66667"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 1.66667 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="1.66667"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 1.66667 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 16.3333 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 16.3333 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 31 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 31 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 45.6667 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 45.6667 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3333"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 60.3333 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3333"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 60.3333 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 88.6667 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 88.6667 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 117.667 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 117.667 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 74.6667 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 74.6667 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 103 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 103 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="60.0003"
									r="1.66667"
									transform="rotate(-90 132 60.0003)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="16.3333"
									r="1.66667"
									transform="rotate(-90 132 16.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="1.66667"
									cy="45.3333"
									r="1.66667"
									transform="rotate(-90 1.66667 45.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="1.66667"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 1.66667 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="45.3333"
									r="1.66667"
									transform="rotate(-90 16.3333 45.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="16.3333"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 16.3333 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="45.3333"
									r="1.66667"
									transform="rotate(-90 31 45.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="31"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 31 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="45.3333"
									r="1.66667"
									transform="rotate(-90 45.6667 45.3333)"
									fill="#3056D3"
									/>
								<circle
									cx="45.6667"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 45.6667 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3333"
									cy="45.3338"
									r="1.66667"
									transform="rotate(-90 60.3333 45.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="60.3333"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 60.3333 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="45.3338"
									r="1.66667"
									transform="rotate(-90 88.6667 45.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="88.6667"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 88.6667 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="45.3338"
									r="1.66667"
									transform="rotate(-90 117.667 45.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="117.667"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 117.667 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="45.3338"
									r="1.66667"
									transform="rotate(-90 74.6667 45.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="74.6667"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 74.6667 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="45.3338"
									r="1.66667"
									transform="rotate(-90 103 45.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="103"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 103 1.66683)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="45.3338"
									r="1.66667"
									transform="rotate(-90 132 45.3338)"
									fill="#3056D3"
									/>
								<circle
									cx="132"
									cy="1.66683"
									r="1.66667"
									transform="rotate(-90 132 1.66683)"
									fill="#3056D3"
									/>
								</svg>
							</span>
						</div>
					</div>
					</div>
				</div>
				<div class="w-full lg:w-1/2 xl:w-5/12 px-4">
					<div class="mt-10 lg:mt-0">
					<span class="font-semibold text-lg text-marine mb-2 block">
						A propos de Nous
					</span>
					<h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8">
						Tennis loisirs et compétition.
					</h2>
					<p class="text-base text-body-color mb-8">
						<div class="flex mb-8 max-w-[370px] w-full">
							<div
								class="
								max-w-[60px]
								sm:max-w-[70px]
								w-full
								h-[60px]
								sm:h-[70px]
								flex
								items-center
								justify-center
								mr-6
								overflow-hidden
								bg-marine bg-opacity-5
								text-marine
								rounded
								"
								>

								<img
								src="{{ secure_asset('img/court.svg') }}"
								width="24"
								height="24"
								viewBox="0 0 24 24"
								class="fill-current" />

							</div>
							<div class="w-full">
								<h4 class="font-bold text-dark text-xl mb-1">3 terrains de 2 surfaces</h4>
									<h6 class="font-bold text-dark text-md mb-1">Béton poreux</h6>
									<ul>
										<li class="text-base text-body-color" > 2 terrains dont 2 couverts </li>
									</ul>
										<h6 class="font-bold text-dark text-md mb-1">Résine</h6>
									<ul>
										<li class="text-base text-body-color"> 1 terrain dont 1 couvert  </li>
									</ul>
							</div>
						</div>
					</p>
					<p class="text-base text-body-color mb-12">
						Le tennis club de Montigny en Gohelle vous ouvre ses portes pour vous faire partager la vie divertissante du club à travers la joie et la bonne humeur de ses licenciés. Vous serez informé des infos du club, des journées spéciales, des résultats des interclubs et des tournois, ect...
					</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ====== Pricing Section Start -->
	<section class="bg-white pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
		<div class="container">
			<div class="flex flex-wrap -mx-4">
				<div class="w-full px-4">
					<div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
						<span class="font-semibold text-lg text-marine mb-2 block">
							Tarification
						</span>
						<h2
						class="
						font-bold
						text-3xl
						sm:text-4xl
						md:text-[40px]
						text-dark
						mb-4
						"
						>
						Notre tarification
						</h2>
					</div>
				</div>
			</div>
			<div class="flex flex-wrap justify-center -mx-4">
				<div class="w-full md:w-1/2 lg:w-1/3 px-4">
					<div
						class="
						bg-white
						rounded-xl
						relative
						z-10
						overflow-hidden
						border border-marine border-opacity-20
						shadow-pricing
						py-10
						px-8
						sm:p-12
						lg:py-10 lg:px-6
						xl:p-12
						mb-10
						"
						>
						<span class="text-marine font-semibold text-lg block mb-4">
							Extérieurs 
						</span>
						<h2 class="font-bold text-dark mb-5 text-[42px]">
							<span class="text-base text-body-color font-medium"> 
								Adulte : 
							</span>
							105€
						<span class="text-base text-body-color font-medium">
						/ an
						</span>
						</h2>
						<h2 class="font-bold text-dark mb-5 text-[42px]">
							<span class="text-base text-body-color font-medium"> 
								Jeunes  : 
							</span>
							70€
						<span class="text-base text-body-color font-medium">
						/ an
						</span>
						</h2>
						<div>
						<span class="absolute right-0 top-7 z-[-1]">
							<svg
								width="77"
								height="172"
								viewBox="0 0 77 172"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
								>
								<circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
								<defs>
									<linearGradient
									id="paint0_linear"
									x1="86"
									y1="0"
									x2="86"
									y2="172"
									gradientUnits="userSpaceOnUse"
									>
									<stop stop-color="#3056D3" stop-opacity="0.09" />
									<stop
										offset="1"
										stop-color="#C4C4C4"
										stop-opacity="0"
										/>
									</linearGradient>
								</defs>
							</svg>
						</span>
						<span class="absolute right-4 top-4 z-[-1]">
							<svg
								width="41"
								height="89"
								viewBox="0 0 41 89"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
								>
								<circle
									cx="38.9138"
									cy="87.4849"
									r="1.42021"
									transform="rotate(180 38.9138 87.4849)"
									fill="#3056D3"
									/>
								<circle
									cx="38.9138"
									cy="74.9871"
									r="1.42021"
									transform="rotate(180 38.9138 74.9871)"
									fill="#3056D3"
									/>
								<circle
									cx="38.9138"
									cy="62.4892"
									r="1.42021"
									transform="rotate(180 38.9138 62.4892)"
									fill="#3056D3"
									/>
								<circle
									cx="38.9138"
									cy="38.3457"
									r="1.42021"
									transform="rotate(180 38.9138 38.3457)"
									fill="#3056D3"
									/>
								<circle
									cx="38.9138"
									cy="13.634"
									r="1.42021"
									transform="rotate(180 38.9138 13.634)"
									fill="#3056D3"
									/>
								<circle
									cx="38.9138"
									cy="50.2754"
									r="1.42021"
									transform="rotate(180 38.9138 50.2754)"
									fill="#3056D3"
									/>
								<circle
									cx="38.9138"
									cy="26.1319"
									r="1.42021"
									transform="rotate(180 38.9138 26.1319)"
									fill="#3056D3"
									/>
								<circle
									cx="38.9138"
									cy="1.42021"
									r="1.42021"
									transform="rotate(180 38.9138 1.42021)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="87.4849"
									r="1.42021"
									transform="rotate(180 26.4157 87.4849)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="74.9871"
									r="1.42021"
									transform="rotate(180 26.4157 74.9871)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="62.4892"
									r="1.42021"
									transform="rotate(180 26.4157 62.4892)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="38.3457"
									r="1.42021"
									transform="rotate(180 26.4157 38.3457)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="13.634"
									r="1.42021"
									transform="rotate(180 26.4157 13.634)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="50.2754"
									r="1.42021"
									transform="rotate(180 26.4157 50.2754)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="26.1319"
									r="1.42021"
									transform="rotate(180 26.4157 26.1319)"
									fill="#3056D3"
									/>
								<circle
									cx="26.4157"
									cy="1.4202"
									r="1.42021"
									transform="rotate(180 26.4157 1.4202)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="87.4849"
									r="1.42021"
									transform="rotate(180 13.9177 87.4849)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="74.9871"
									r="1.42021"
									transform="rotate(180 13.9177 74.9871)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="62.4892"
									r="1.42021"
									transform="rotate(180 13.9177 62.4892)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="38.3457"
									r="1.42021"
									transform="rotate(180 13.9177 38.3457)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="13.634"
									r="1.42021"
									transform="rotate(180 13.9177 13.634)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="50.2754"
									r="1.42021"
									transform="rotate(180 13.9177 50.2754)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="26.1319"
									r="1.42021"
									transform="rotate(180 13.9177 26.1319)"
									fill="#3056D3"
									/>
								<circle
									cx="13.9177"
									cy="1.42019"
									r="1.42021"
									transform="rotate(180 13.9177 1.42019)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="87.4849"
									r="1.42021"
									transform="rotate(180 1.41963 87.4849)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="74.9871"
									r="1.42021"
									transform="rotate(180 1.41963 74.9871)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="62.4892"
									r="1.42021"
									transform="rotate(180 1.41963 62.4892)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="38.3457"
									r="1.42021"
									transform="rotate(180 1.41963 38.3457)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="13.634"
									r="1.42021"
									transform="rotate(180 1.41963 13.634)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="50.2754"
									r="1.42021"
									transform="rotate(180 1.41963 50.2754)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="26.1319"
									r="1.42021"
									transform="rotate(180 1.41963 26.1319)"
									fill="#3056D3"
									/>
								<circle
									cx="1.41963"
									cy="1.4202"
									r="1.42021"
									transform="rotate(180 1.41963 1.4202)"
									fill="#3056D3"
									/>
							</svg>
						</span>
						</div>
					</div>
				</div>
				<div class="w-full md:w-1/2 lg:w-1/3 px-4">
					<div
						class="
						bg-white
						rounded-xl
						relative
						z-10
						overflow-hidden
						border border-marine border-opacity-20
						shadow-pricing
						py-10
						px-8
						sm:p-12
						lg:py-10 lg:px-6
						xl:p-12
						mb-10
						"
						>
						<span class="text-marine font-semibold text-lg block mb-4">
							École de tennis 
						</span>
						<h4 class="font-bold text-dark mb-5 text-[27px]">
							<span class="text-base text-body-color font-medium"> 
								- de 10 ans : 
							</span>
							75€
						<span class="text-base text-body-color font-medium">
						/ 10 semaines 
						</span>
						</h4>
						<h4 class="font-bold text-dark mb-5 text-[27px]">
							<span class="text-base text-body-color font-medium"> 
								- de 18 ans :
							</span>
							105€
						<span class="text-base text-body-color font-medium">
						/ 10 semaines 
						</span>
						</h4>
						<h4 class="font-bold text-dark mb-5 text-[27px]">
							<span class="text-base text-body-color font-medium"> 
								Adultes :  
							</span>
							135€
						<span class="text-base text-body-color font-medium">
						/ 10 semaines 
						</span>
						</h4>
						<div>
							<span class="absolute right-0 top-7 z-[-1]">
								<svg
									width="77"
									height="172"
									viewBox="0 0 77 172"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
									>
									<circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
									<defs>
										<linearGradient
										id="paint0_linear"
										x1="86"
										y1="0"
										x2="86"
										y2="172"
										gradientUnits="userSpaceOnUse"
										>
										<stop stop-color="#3056D3" stop-opacity="0.09" />
										<stop
											offset="1"
											stop-color="#C4C4C4"
											stop-opacity="0"
											/>
										</linearGradient>
									</defs>
								</svg>
							</span>
							<span class="absolute right-4 top-4 z-[-1]">
								<svg
									width="41"
									height="89"
									viewBox="0 0 41 89"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
									>
									<circle
										cx="38.9138"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 38.9138 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 38.9138 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 38.9138 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 38.9138 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 38.9138 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 38.9138 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 38.9138 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="1.42021"
										r="1.42021"
										transform="rotate(180 38.9138 1.42021)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 26.4157 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 26.4157 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 26.4157 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 26.4157 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 26.4157 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 26.4157 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 26.4157 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="1.4202"
										r="1.42021"
										transform="rotate(180 26.4157 1.4202)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 13.9177 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 13.9177 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 13.9177 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 13.9177 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 13.9177 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 13.9177 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 13.9177 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="1.42019"
										r="1.42021"
										transform="rotate(180 13.9177 1.42019)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 1.41963 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 1.41963 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 1.41963 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 1.41963 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 1.41963 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 1.41963 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 1.41963 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="1.4202"
										r="1.42021"
										transform="rotate(180 1.41963 1.4202)"
										fill="#3056D3"
										/>
								</svg>
							</span>
						</div>
						<ul>
							<li class="flex text-base text-body-color mb-4">
								<span class="
									rounded-full
									mr-2
									text-base text-marine
									flex
									items-center
									">
									<svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
										<path d="M19.2188 2.90626L17.0625 0.343758C16.875 0.125008 16.5312 0.0937583 16.2812 0.281258C16.0625 0.468758 16.0312 0.812508 16.2188 1.06251L18.25 3.46876H0.9375C0.625 3.46876 0.375 3.71876 0.375 4.03126C0.375 4.34376 0.625 4.59376 0.9375 4.59376H18.25L16.2188 7.00001C16.0312 7.21876 16.0625 7.56251 16.2812 7.78126C16.375 7.87501 16.5 7.90626 16.625 7.90626C16.7812 7.90626 16.9375 7.84376 17.0312 7.71876L19.1875 5.15626C19.75 4.46876 19.75 3.53126 19.2188 2.90626Z"></path>
									</svg>
								</span>
								Le lundi de 18h à 21h30 (adultes compétiteurs)
							</li>
							<li class="flex text-base text-body-color mb-4">
								<span class="
									rounded-full
									mr-2
									text-base text-marine
									flex
									items-center
									">
									<svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
										<path d="M19.2188 2.90626L17.0625 0.343758C16.875 0.125008 16.5312 0.0937583 16.2812 0.281258C16.0625 0.468758 16.0312 0.812508 16.2188 1.06251L18.25 3.46876H0.9375C0.625 3.46876 0.375 3.71876 0.375 4.03126C0.375 4.34376 0.625 4.59376 0.9375 4.59376H18.25L16.2188 7.00001C16.0312 7.21876 16.0625 7.56251 16.2812 7.78126C16.375 7.87501 16.5 7.90626 16.625 7.90626C16.7812 7.90626 16.9375 7.84376 17.0312 7.71876L19.1875 5.15626C19.75 4.46876 19.75 3.53126 19.2188 2.90626Z"></path>
									</svg>
								</span>
								Le mardi de 18h à 21h (enfants et adultes débutants)
							</li>
							<li class="flex text-base text-body-color mb-4">
								<span class="
									rounded-full
									mr-2
									text-base text-marine
									flex
									items-center
									">
									<svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
										<path d="M19.2188 2.90626L17.0625 0.343758C16.875 0.125008 16.5312 0.0937583 16.2812 0.281258C16.0625 0.468758 16.0312 0.812508 16.2188 1.06251L18.25 3.46876H0.9375C0.625 3.46876 0.375 3.71876 0.375 4.03126C0.375 4.34376 0.625 4.59376 0.9375 4.59376H18.25L16.2188 7.00001C16.0312 7.21876 16.0625 7.56251 16.2812 7.78126C16.375 7.87501 16.5 7.90626 16.625 7.90626C16.7812 7.90626 16.9375 7.84376 17.0312 7.71876L19.1875 5.15626C19.75 4.46876 19.75 3.53126 19.2188 2.90626Z"></path>
									</svg>
								</span>
								Le mercredi de 12h à 16h (enfants)
							</li>
							<li class="flex text-base text-body-color mb-4">
								<span class="
									rounded-full
									mr-2
									text-base text-marine
									flex
									items-center
									">
									<svg width="20" height="8" viewBox="0 0 20 8" class="fill-current">
										<path d="M19.2188 2.90626L17.0625 0.343758C16.875 0.125008 16.5312 0.0937583 16.2812 0.281258C16.0625 0.468758 16.0312 0.812508 16.2188 1.06251L18.25 3.46876H0.9375C0.625 3.46876 0.375 3.71876 0.375 4.03126C0.375 4.34376 0.625 4.59376 0.9375 4.59376H18.25L16.2188 7.00001C16.0312 7.21876 16.0625 7.56251 16.2812 7.78126C16.375 7.87501 16.5 7.90626 16.625 7.90626C16.7812 7.90626 16.9375 7.84376 17.0312 7.71876L19.1875 5.15626C19.75 4.46876 19.75 3.53126 19.2188 2.90626Z"></path>
									</svg>
								</span>
								Le vendredi de 18h à 21h (enfants et adultes compétiteurs)
							</li>
						</ul>
					</div>
				</div>
				<div class="w-full md:w-1/2 lg:w-1/3 px-4">
					<div
						class="
						bg-white
						rounded-xl
						relative
						z-10
						overflow-hidden
						border border-marine border-opacity-20
						shadow-pricing
						py-10
						px-8
						sm:p-12
						lg:py-10 lg:px-6
						xl:p-12
						mb-10
						"
						>
						<span class="text-marine font-semibold text-lg block mb-4">
							Montignynois 
						</span>
						<h2 class="font-bold text-dark mb-5 text-[42px]">
							<span class="text-base text-body-color font-medium"> 
								Adulte : 
							</span>
							90€
						<span class="text-base text-body-color font-medium">
						/ an
						</span>
						</h2>
						<h2 class="font-bold text-dark mb-5 text-[42px]">
							<span class="text-base text-body-color font-medium"> 
								Jeunes  : 
							</span>
							60€
						<span class="text-base text-body-color font-medium">
						/ an
						</span>
						</h2>
						<div>
							<span class="absolute right-0 top-7 z-[-1]">
								<svg
									width="77"
									height="172"
									viewBox="0 0 77 172"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
									>
									<circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
									<defs>
										<linearGradient
										id="paint0_linear"
										x1="86"
										y1="0"
										x2="86"
										y2="172"
										gradientUnits="userSpaceOnUse"
										>
										<stop stop-color="#3056D3" stop-opacity="0.09" />
										<stop
											offset="1"
											stop-color="#C4C4C4"
											stop-opacity="0"
											/>
										</linearGradient>
									</defs>
								</svg>
							</span>
							<span class="absolute right-4 top-4 z-[-1]">
								<svg
									width="41"
									height="89"
									viewBox="0 0 41 89"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
									>
									<circle
										cx="38.9138"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 38.9138 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 38.9138 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 38.9138 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 38.9138 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 38.9138 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 38.9138 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 38.9138 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="38.9138"
										cy="1.42021"
										r="1.42021"
										transform="rotate(180 38.9138 1.42021)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 26.4157 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 26.4157 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 26.4157 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 26.4157 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 26.4157 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 26.4157 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 26.4157 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="26.4157"
										cy="1.4202"
										r="1.42021"
										transform="rotate(180 26.4157 1.4202)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 13.9177 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 13.9177 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 13.9177 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 13.9177 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 13.9177 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 13.9177 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 13.9177 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="13.9177"
										cy="1.42019"
										r="1.42021"
										transform="rotate(180 13.9177 1.42019)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="87.4849"
										r="1.42021"
										transform="rotate(180 1.41963 87.4849)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="74.9871"
										r="1.42021"
										transform="rotate(180 1.41963 74.9871)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="62.4892"
										r="1.42021"
										transform="rotate(180 1.41963 62.4892)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="38.3457"
										r="1.42021"
										transform="rotate(180 1.41963 38.3457)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="13.634"
										r="1.42021"
										transform="rotate(180 1.41963 13.634)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="50.2754"
										r="1.42021"
										transform="rotate(180 1.41963 50.2754)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="26.1319"
										r="1.42021"
										transform="rotate(180 1.41963 26.1319)"
										fill="#3056D3"
										/>
									<circle
										cx="1.41963"
										cy="1.4202"
										r="1.42021"
										transform="rotate(180 1.41963 1.4202)"
										fill="#3056D3"
										/>
								</svg>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ====== Contact Section Start -->
	<section class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10">
		<div class="container">
			<div class="flex flex-wrap lg:justify-between -mx-4">
				<div class="w-full lg:w-1/2 xl:w-6/12 px-4">
					<div class="max-w-[570px] mb-12 lg:mb-0">
						<span class="block mb-4 text-base text-marine font-semibold">
							Contacter-nous
						</span>
						<h2
						class="
						text-dark
						mb-6
						uppercase
						font-bold
						text-[32px]
						sm:text-[40px]
						lg:text-[36px]
						xl:text-[40px]
						"
						>
						TC Montigny-en-Gohelle
						</h2>

						<div class="flex mb-8 max-w-[370px] w-full">
							<div
								class="
								max-w-[60px]
								sm:max-w-[70px]
								w-full
								h-[60px]
								sm:h-[70px]
								flex
								items-center
								justify-center
								mr-6
								overflow-hidden
								bg-marine bg-opacity-5
								text-marine
								rounded
								"
								>
								<svg
									width="24"
									height="24"
									viewBox="0 0 24 24"
									class="fill-current"
									>
									<path
										d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z"
										/>
								</svg>
							</div>
							<div class="w-full">
								<h4 class="font-bold text-dark text-xl mb-1">Notre localisation</h4>
									<a href="https://www.google.com/maps/place/TC+MONTIGNY-EN-GOHELLE/@50.431026,2.926657,15z/data=!4m5!3m4!1s0x0:0x94635e2e7ddc0d9f!8m2!3d50.431026!4d2.926657">
										Rue Emile Zola, 62640 Montigny-en-Gohelle
									</a>
							</div>
						</div>
						<div class="flex mb-8 max-w-[370px] w-full">
							<div
								class="
								max-w-[60px]
								sm:max-w-[70px]
								w-full
								h-[60px]
								sm:h-[70px]
								flex
								items-center
								justify-center
								mr-6
								overflow-hidden
								bg-marine bg-opacity-5
								text-marine
								rounded
								"
								>
								<svg
									width="24"
									height="26"
									viewBox="0 0 24 26"
									class="fill-current"
									>
									<path
										d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z"
										/>
									<path
										d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z"
										/>
									<path
										d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z"
										/>
								</svg>
							</div>
							<div class="w-full">
								<h4 class="font-bold text-dark text-xl mb-1">Numéro de téléphone</h4>
								<p class="text-base text-body-color">03 21 49 25 92</p>
							</div>
						</div>
						<div class="flex mb-8 max-w-[370px] w-full">
							<div
								class="
								max-w-[60px]
								sm:max-w-[70px]
								w-full
								h-[60px]
								sm:h-[70px]
								flex
								items-center
								justify-center
								mr-6
								overflow-hidden
								bg-marine bg-opacity-5
								text-marine
								rounded
								"
								>
								<svg
									width="28"
									height="19"
									viewBox="0 0 28 19"
									class="fill-current"
									>
									<path
										d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"
										/>
								</svg>
							</div>
							<div class="w-full">
								<h4 class="font-bold text-dark text-xl mb-1">
									Adresse e-mail
								</h4>
								<p class="text-base text-body-color">tc-meg_62640@outlook.fr</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="w-full lg:w-1/2 xl:w-5/12 px-4">
					<div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
						<span class="block mb-4 text-base text-marine font-semibold">
							Président
						</span>
						<div class="flex mb-8 max-w-[370px] w-full">
							
							<div class="mx-auto">
								<h4 class="font-bold text-dark text-xl mb-1 mx-auto">Xavier CARIDROIT</h4>
							</div>
						</div>
						<div class="flex mb-8 max-w-[370px] w-full">
							<div
								class="
								max-w-[60px]
								sm:max-w-[70px]
								w-full
								h-[60px]
								sm:h-[70px]
								flex
								items-center
								justify-center
								mr-6
								overflow-hidden
								bg-marine bg-opacity-5
								text-marine
								rounded
								"
								>
								<svg
									width="24"
									height="26"
									viewBox="0 0 24 26"
									class="fill-current"
									>
									<path
										d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z"
										/>
									<path
										d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z"
										/>
									<path
										d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z"
										/>
								</svg>
							</div>
							<div class="w-full">
								<h4 class="font-bold text-dark text-xl mb-1">Numéro de téléphone</h4>
								<p class="text-base text-body-color">06 61 94 79 10</p>
							</div>
						</div>
						<div class="flex mb-8 max-w-[370px] w-full">
							<div
								class="
								max-w-[60px]
								sm:max-w-[70px]
								w-full
								h-[60px]
								sm:h-[70px]
								flex
								items-center
								justify-center
								mr-6
								overflow-hidden
								bg-marine bg-opacity-5
								text-marine
								rounded
								"
								>
								<svg
									width="28"
									height="19"
									viewBox="0 0 28 19"
									class="fill-current"
									>
									<path
										d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z"
										/>
								</svg>
							</div>
							<div class="w-full">
								<h4 class="font-bold text-dark text-xl mb-1">
									Adresse e-mail
								</h4>
								<p class="text-base text-body-color">xave1975region62@hotmail.com</p>
							</div>
						</div>
						<div>
						<span class="absolute -top-10 -right-9 z-[-1]">
							<svg
								width="100"
								height="100"
								viewBox="0 0 100 100"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
								>
								<path
									fill-rule="evenodd"
									clip-rule="evenodd"
									d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
									fill="#3056D3"
									/>
							</svg>
						</span>
						<span class="absolute -right-10 top-[90px] z-[-1]">
							<svg
								width="34"
								height="134"
								viewBox="0 0 34 134"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
								>
								<circle
									cx="31.9993"
									cy="132"
									r="1.66667"
									transform="rotate(180 31.9993 132)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 31.9993 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 31.9993 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="88"
									r="1.66667"
									transform="rotate(180 31.9993 88)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 31.9993 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="45"
									r="1.66667"
									transform="rotate(180 31.9993 45)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="16"
									r="1.66667"
									transform="rotate(180 31.9993 16)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="59"
									r="1.66667"
									transform="rotate(180 31.9993 59)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 31.9993 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 31.9993 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="132"
									r="1.66667"
									transform="rotate(180 17.3333 132)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 17.3333 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 17.3333 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="88"
									r="1.66667"
									transform="rotate(180 17.3333 88)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 17.3333 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="45"
									r="1.66667"
									transform="rotate(180 17.3333 45)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="16"
									r="1.66667"
									transform="rotate(180 17.3333 16)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="59"
									r="1.66667"
									transform="rotate(180 17.3333 59)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 17.3333 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 17.3333 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="132"
									r="1.66667"
									transform="rotate(180 2.66536 132)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 2.66536 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 2.66536 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="88"
									r="1.66667"
									transform="rotate(180 2.66536 88)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 2.66536 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="45"
									r="1.66667"
									transform="rotate(180 2.66536 45)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="16"
									r="1.66667"
									transform="rotate(180 2.66536 16)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="59"
									r="1.66667"
									transform="rotate(180 2.66536 59)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 2.66536 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 2.66536 1.66665)"
									fill="#13C296"
									/>
							</svg>
						</span>
						<span class="absolute -left-7 -bottom-7 z-[-1]">
							<svg
								width="107"
								height="134"
								viewBox="0 0 107 134"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
								>
								<circle
									cx="104.999"
									cy="132"
									r="1.66667"
									transform="rotate(180 104.999 132)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 104.999 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 104.999 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="88"
									r="1.66667"
									transform="rotate(180 104.999 88)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 104.999 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="45"
									r="1.66667"
									transform="rotate(180 104.999 45)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="16"
									r="1.66667"
									transform="rotate(180 104.999 16)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="59"
									r="1.66667"
									transform="rotate(180 104.999 59)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 104.999 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="104.999"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 104.999 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="132"
									r="1.66667"
									transform="rotate(180 90.3333 132)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 90.3333 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 90.3333 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="88"
									r="1.66667"
									transform="rotate(180 90.3333 88)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 90.3333 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="45"
									r="1.66667"
									transform="rotate(180 90.3333 45)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="16"
									r="1.66667"
									transform="rotate(180 90.3333 16)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="59"
									r="1.66667"
									transform="rotate(180 90.3333 59)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 90.3333 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="90.3333"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 90.3333 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="132"
									r="1.66667"
									transform="rotate(180 75.6654 132)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="132"
									r="1.66667"
									transform="rotate(180 31.9993 132)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 75.6654 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 31.9993 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 75.6654 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 31.9993 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="88"
									r="1.66667"
									transform="rotate(180 75.6654 88)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="88"
									r="1.66667"
									transform="rotate(180 31.9993 88)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 75.6654 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 31.9993 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="45"
									r="1.66667"
									transform="rotate(180 75.6654 45)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="45"
									r="1.66667"
									transform="rotate(180 31.9993 45)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="16"
									r="1.66667"
									transform="rotate(180 75.6654 16)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="16"
									r="1.66667"
									transform="rotate(180 31.9993 16)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="59"
									r="1.66667"
									transform="rotate(180 75.6654 59)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="59"
									r="1.66667"
									transform="rotate(180 31.9993 59)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 75.6654 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 31.9993 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="75.6654"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 75.6654 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="31.9993"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 31.9993 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="132"
									r="1.66667"
									transform="rotate(180 60.9993 132)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="132"
									r="1.66667"
									transform="rotate(180 17.3333 132)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 60.9993 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 17.3333 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 60.9993 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 17.3333 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="88"
									r="1.66667"
									transform="rotate(180 60.9993 88)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="88"
									r="1.66667"
									transform="rotate(180 17.3333 88)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 60.9993 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 17.3333 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="45"
									r="1.66667"
									transform="rotate(180 60.9993 45)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="45"
									r="1.66667"
									transform="rotate(180 17.3333 45)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="16"
									r="1.66667"
									transform="rotate(180 60.9993 16)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="16"
									r="1.66667"
									transform="rotate(180 17.3333 16)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="59"
									r="1.66667"
									transform="rotate(180 60.9993 59)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="59"
									r="1.66667"
									transform="rotate(180 17.3333 59)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 60.9993 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 17.3333 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="60.9993"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 60.9993 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="17.3333"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 17.3333 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="132"
									r="1.66667"
									transform="rotate(180 46.3333 132)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="132"
									r="1.66667"
									transform="rotate(180 2.66536 132)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 46.3333 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="117.333"
									r="1.66667"
									transform="rotate(180 2.66536 117.333)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 46.3333 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="102.667"
									r="1.66667"
									transform="rotate(180 2.66536 102.667)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="88"
									r="1.66667"
									transform="rotate(180 46.3333 88)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="88"
									r="1.66667"
									transform="rotate(180 2.66536 88)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 46.3333 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="73.3333"
									r="1.66667"
									transform="rotate(180 2.66536 73.3333)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="45"
									r="1.66667"
									transform="rotate(180 46.3333 45)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="45"
									r="1.66667"
									transform="rotate(180 2.66536 45)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="16"
									r="1.66667"
									transform="rotate(180 46.3333 16)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="16"
									r="1.66667"
									transform="rotate(180 2.66536 16)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="59"
									r="1.66667"
									transform="rotate(180 46.3333 59)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="59"
									r="1.66667"
									transform="rotate(180 2.66536 59)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 46.3333 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="30.6666"
									r="1.66667"
									transform="rotate(180 2.66536 30.6666)"
									fill="#13C296"
									/>
								<circle
									cx="46.3333"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 46.3333 1.66665)"
									fill="#13C296"
									/>
								<circle
									cx="2.66536"
									cy="1.66665"
									r="1.66667"
									transform="rotate(180 2.66536 1.66665)"
									fill="#13C296"
									/>
							</svg>
						</span>
						</div>
					</div>
				</div>

				<style>
				  .map {
					height: 400px;
					width: 100%;
				  }
				</style>
				<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.14.1/build/ol.js"></script>
				<div id="map" class="map"></div>
				<script>

					var attribution = new ol.control.Attribution({
						collapsible: false
					});

					var map = new ol.Map({
						controls: ol.control.defaults({attribution: false}).extend([attribution]),
						layers: [
							new ol.layer.Tile({
								source: new ol.source.OSM({
									maxZoom: 18
								})
							})
						],
						target: 'map',
						view: new ol.View({
							center: ol.proj.fromLonLat([2.927812728710595,50.43122695876269]),
							maxZoom: 18,
							zoom: 18
						})
					});
					var layer = new ol.layer.Vector({
						source: new ol.source.Vector({
							features: [
								new ol.Feature({
									geometry: new ol.geom.Point(ol.proj.fromLonLat([2.927812728710595,50.43122695876269]))
								})
							]
						})
					});
					 map.addLayer(layer);
				</script>
			</div>
		</div>
	</section>
	<!-- ====== Contact Section End -->
	</div>

 @endsection