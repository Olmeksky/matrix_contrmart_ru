$(window).on('load', function() {
	//console.log('Погнали что ли');
	
	
	// доп. функция для 90-х годов
	function digit (number) {
		var figures = "" + number;
		var sum = 0;
		for (var i = 0; i < figures.length; i++) 
			sum += +figures[i];
		return sum;
	}
	
	// Основная функция расчета арканов
	function arcan22(summ) {
		var sl1 = 0;
		var sl2 = 0;
		var sl3 = 0;
		summ = String(summ); // строку
		// длинна строки
		//let l_summ = summ.length;
		//console.log('Длинна строки_' + l_summ);
		if (summ.length==3) {
			//console.log('Длинна 3 :' + summ);
			summ = digit(summ);
			return Number(summ);
		}
		else if (summ.length==2) {
			//console.log('Длинна 2 :' + summ);
			if (Number(summ)>22) {
			sl1 = summ.substr(0,1);
			sl2 = summ.substr(1,1);
			sl3 = Number(sl1)+Number(sl2);
			//console.log('Длинна 2 слог :' + sl3);
			return sl3;
			} else return Number(summ);
		}
		else if (summ.length==1) {
			//console.log('Длинна 1 :' + summ);
			return Number(summ);
		}
		else if (summ.length<1) {
			//console.log('Пусто :' + summ);
			return Number(summ);
		}
		else {
			//console.log('Более 3-х знаков :' + summ);
			summ = digit(summ);
			//console.log('Длинна 2 слог :' + summ);
			if (summ<=22) {
				//console.log('Меньше 23 :' + summ);
				return Number(summ);
			} else {
				//console.log('Опять больше 22 слог :' + summ);
				summ = digit(summ);
				return Number(summ);
			}
		}
	}

	/* код на jQuery */
	// установим body фон #eee
	//$('body').css('background-color', '#e1e1e1');
	// выровняем h1 по центру
	//$('h1').css('text-align', 'center');
	// Покажем размеры экрана
	const screenWidth = window.screen.width;
	const screenHeight = window.screen.height;
	const brauz = navigator.userAgent;
	//alert ('Передайте разработчику\n Ширина экрана: '+screenWidth+',\n Браузер: '+brauz);
	//var now = new Date();
	//alert( now );
	//$('#checkDate').val(now);

	// Функция возвращает возраст
	function getAge() {
		var strDate = get('birthday');
		var arrDate = strDate.split(/\D+/g);
		var date = new Date(arrDate[0], arrDate[1] - 1, arrDate[2]);
		var now = new Date();
		var age = now.getFullYear() - date.getFullYear();
		now.setFullYear(date.getFullYear());
		if (now < date) age--;
		$('span.oldest').html('<b>'+age+'</b>');
	}

	// Считывает GET переменную по тегу и отдает.
	function get(name) {
		if(name=(new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(location.search)){
			return decodeURIComponent(name[1]);
		};
	}
	
		// Выводим некоторую информацию перед схемой
	var name = get('firstname');
		//console.log(name);
	$('#checkName').val(name);
	$('span.firstname').html('<b>'+name+'</b>');
	
	var birth = get('birthday');
		//console.log(birth);
		$('#checkDate').val(birth);
	var year = birth[0] + birth[1] + birth[2] + birth[3];
	var month = birth[5] + birth[6];
	var day = birth[8] + birth[9];
	$('span.birthday').html('<b>'+day+' '+month+' '+year+'г.</b>');
	// Устанавливает возраст
	getAge();
	
	var gender = get('gender');
	if (gender=='male') {
		$('#s_male').prop('checked', true);
	} else if (gender=='female') {
		$('#s_female').prop('checked', true);
	} else if (gender=='trans') {
		$('#s_trans').prop('checked', true);
	} else {
		Concole.log('нету гендера - это странно');
	}
	
	//$('span.oldest').html('<b>'+age+'</b>');
	
	a = arcan22(+day);
	b = arcan22(+month);
	c = arcan22(+year);
	d = arcan22(a+b+c);
	e = arcan22(a+b+c+d);
	f = arcan22(a+b);
	g = arcan22(b+c);
	h = arcan22(c+d);
	i = arcan22(a+d);
	/*console.log(a);console.log(b);console.log(c);console.log(d);console.log(e);console.log(f);console.log(g);console.log(h);console.log(i);*/
	// Устанавливаем значения A-I на схему
	$('div.A').html(a);
	$('div.B').html(b);
	$('div.C').html(c);
	$('div.D').html(d);
	$('div.E').html(e);
	$('div.F').html(f);
	$('div.G').html(g);
	$('div.H').html(h);
	$('div.I').html(i);
	a2 = arcan22(e+a);
	b2 = arcan22(e+b);
	c2 = arcan22(e+c);
	d2 = arcan22(e+d);
	$('div.A2').html(a2);
	$('div.B2').html(b2);
	$('div.C2').html(c2);
	$('div.D2').html(d2);
	a1 = arcan22(a+a2);
	b1 = arcan22(b+b2);
	c1 = arcan22(c+c2);
	d1 = arcan22(d+d2);
	$('div.A1').html(a1);
	$('div.B1').html(b1);
	$('div.C1').html(c1);
	$('div.D1').html(d1);
	f2 = arcan22(e+f);
	g2 = arcan22(e+g);
	h2 = arcan22(e+h);
	i2 = arcan22(e+i);
	$('div.F2').html(f2);
	$('div.G2').html(g2);
	$('div.H2').html(h2);
	$('div.I2').html(i2);
	f1 = arcan22(f+f2);
	g1 = arcan22(g+g2);
	h1 = arcan22(h+h2);
	i1 = arcan22(i+i2);
	$('div.F1').html(f1);
	$('div.G1').html(g1);
	$('div.H1').html(h1);
	$('div.I1').html(i1);

	a3 = arcan22(e+a2);
	b3 = arcan22(e+b2);
	$('div.A3').html(a3);
	$('div.B3').html(b3);
	
	
	// вычислим года 0-10 лет
	let5 = arcan22(a+f);
	let2 = arcan22(a+let5);
	let7 = arcan22(let5+f);
	let1 = arcan22(a+let2);
	let8 = arcan22(let7+f);
	let3 = arcan22(let2+let5);
	let6 = arcan22(let5+let7);
	// установим значения к годам 0-10 лет
	$('.LET5').html(let5);
	$('.LET2').html(let2);
	$('.LET7').html(let7);
	$('.LET1').html(let1);
	$('.LET8').html(let8);
	$('.LET3').html(let3);
	$('.LET6').html(let6);
	// вычислим года 10-20 лет
	let15 = arcan22(f+b);
	let12 = arcan22(f+let15);
	let17 = arcan22(let15+b);
	let11 = arcan22(f+let12);
	let18 = arcan22(let17+b);
	let13 = arcan22(let12+let15);
	let16 = arcan22(let15+let17);
	// установим значения к годам 10-20 лет
	$('.LET15').html(let15);
	$('.LET12').html(let12);
	$('.LET17').html(let17);
	$('.LET11').html(let11);
	$('.LET18').html(let18);
	$('.LET13').html(let13);
	$('.LET16').html(let16);
	// вычислим года 20-30 лет
	let25 = arcan22(b+g);
	let22 = arcan22(b+let25);
	let27 = arcan22(let25+g);
	let21 = arcan22(b+let22);
	let28 = arcan22(let27+g);
	let23 = arcan22(let22+let25);
	let26 = arcan22(let25+let27);
	// установим значения к годам 20-30 лет
	$('.LET25').html(let25);
	$('.LET22').html(let22);
	$('.LET27').html(let27);
	$('.LET21').html(let21);
	$('.LET28').html(let28);
	$('.LET23').html(let23);
	$('.LET26').html(let26);
	// вычислим года 30-40 лет
	let35 = arcan22(g+c);
	let32 = arcan22(g+let35);
	let37 = arcan22(let35+c);
	let31 = arcan22(g+let32);
	let38 = arcan22(let37+c);
	let33 = arcan22(let32+let35);
	let36 = arcan22(let35+let37);
	// установим значения к годам 30-40 лет
	$('.LET35').html(let35);
	$('.LET32').html(let32);
	$('.LET37').html(let37);
	$('.LET31').html(let31);
	$('.LET38').html(let38);
	$('.LET33').html(let33);
	$('.LET36').html(let36);
	// вычислим года 40-50 лет
	let45 = arcan22(c+h);
	let42 = arcan22(c+let45);
	let47 = arcan22(let45+h);
	let41 = arcan22(c+let42);
	let48 = arcan22(let47+h);
	let43 = arcan22(let42+let45);
	let46 = arcan22(let45+let47);
	// установим значения к годам 40-50 лет
	$('.LET45').html(let45);
	$('.LET42').html(let42);
	$('.LET47').html(let47);
	$('.LET41').html(let41);
	$('.LET48').html(let48);
	$('.LET43').html(let43);
	$('.LET46').html(let46);
	// вычислим года 50-60 лет
	let55 = arcan22(h+d);
	let52 = arcan22(h+let55);
	let57 = arcan22(let55+d);
	let51 = arcan22(h+let52);
	let58 = arcan22(let57+d);
	let53 = arcan22(let52+let55);
	let56 = arcan22(let55+let57);
	// установим значения к годам 50-60 лет
	$('.LET55').html(let55);
	$('.LET52').html(let52);
	$('.LET57').html(let57);
	$('.LET51').html(let51);
	$('.LET58').html(let58);
	$('.LET53').html(let53);
	$('.LET56').html(let56);
	// вычислим года 60-70 лет
	let65 = arcan22(d+i);
	let62 = arcan22(d+let65);
	let67 = arcan22(let65+i);
	let61 = arcan22(d+let62);
	let68 = arcan22(let67+i);
	let63 = arcan22(let62+let65);
	let66 = arcan22(let65+let67);
	// установим значения к годам 60-70 лет
	$('.LET65').html(let65);
	$('.LET62').html(let62);
	$('.LET67').html(let67);
	$('.LET61').html(let61);
	$('.LET68').html(let68);
	$('.LET63').html(let63);
	$('.LET66').html(let66);
	// вычислим года 70-80 лет
	let75 = arcan22(i+a);
	let72 = arcan22(i+let75);
	let77 = arcan22(let75+a);
	let71 = arcan22(i+let72);
	let78 = arcan22(let77+a);
	let73 = arcan22(let72+let75);
	let76 = arcan22(let75+let77);
	// установим значения к годам 70-80 лет
	$('.LET75').html(let75);
	$('.LET72').html(let72);
	$('.LET77').html(let77);
	$('.LET71').html(let71);
	$('.LET78').html(let78);
	$('.LET73').html(let73);
	$('.LET76').html(let76);
	
	
	// Установка значений для таблицы чакр
	$('td.A_ch').html(a);
	$('td.B_ch').html(b);
	$('td.A1_ch').html(a1);
	$('td.B1_ch').html(b1);
	$('td.A2_ch').html(a2);
	$('td.B2_ch').html(b2);
	$('td.A3_ch').html(a3);
	$('td.B3_ch').html(b3);
	$('td.E_ch').html(e);
	$('td.E_ch').html(e);
	$('td.C2_ch').html(c2);
	$('td.D2_ch').html(d2);
	$('td.C_ch').html(c);
	$('td.D_ch').html(d);

	A1B1_ch = arcan22(a1+b1);
	A2B2_ch = arcan22(a2+b2);
	A3B3_ch = arcan22(a3+b3);
	EE_ch = arcan22(e+e);
	C2D2_ch = arcan22(c2+d2);
	$('td.AB_ch').html(f);
	$('td.A1B1_ch').html(A1B1_ch);
	$('td.A2B2_ch').html(A2B2_ch);
	$('td.A3B3_ch').html(A3B3_ch);
	$('td.EE_ch').html(EE_ch);
	$('td.C2D2_ch').html(C2D2_ch);
	$('td.CD_ch').html(h);

	fizika = arcan22(a+a1+a2+a3+e+c2+c);
	energy = arcan22(b+b1+b2+b3+e+d2+d);
	emocii = arcan22(f+A1B1_ch+A2B2_ch+A3B3_ch+EE_ch+C2D2_ch+h);
	//console.log('Физика: '+fizika);
	//console.log('Энергия: '+energy);
	//console.log('Эмоции: '+emocii);
	$('td.fizika').html(fizika);
	$('td.energy').html(energy);
	$('td.emocii').html(emocii);
	
	// Установка значений эмоции, любовь и деньги
	$('div.EM').html(C2D2_ch);
	love = arcan22(C2D2_ch+d2);
	dengi = arcan22(C2D2_ch+c2);
	$('div.LOVE').html(love);
	$('div.DENGI').html(dengi);

	// Расчет предназначений
	nebo = arcan22(b+d);
	zeml = arcan22(a+c);
	seb = arcan22(nebo+zeml);
	
	rpm = arcan22(f+h);
	rpzh = arcan22(g+i);
	soc = arcan22(rpm+rpzh);

	duh = arcan22(seb+soc);
	planet = arcan22(arcan22(nebo+zeml+seb)+arcan22(rpm+rpzh+soc));
	
	// Установка предназначений
	$('span.NEBO').html(nebo);
	$('span.ZEML').html(zeml);
	$('span.SEB').html(seb);
	$('span.RPM').html(rpm);
	$('span.RPZH').html(rpzh);
	$('span.SOC').html(soc);

	$('span.DUH').html(duh);
	$('span.PLANET').html(planet);

	
	
});
