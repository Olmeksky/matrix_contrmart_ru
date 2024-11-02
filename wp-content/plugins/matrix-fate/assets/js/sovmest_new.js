$(window).on('load', function() {
	//console.log('Погнали что ли');
	function digit (number) {
		var figures = "" + number;
		var sum = 0;
		for (var i = 0; i < figures.length; i++) 
			sum += +figures[i];
		return sum;
	}

	$(function(){
		// инициализации подсказок для всех элементов на странице, имеющих атрибут data-toggle="tooltip"
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	function arcan22(summ) {
		var sl1 = 0;
		var sl2 = 0;
		var sl3 = 0;
		summ = String(summ); // строку
		// длинна строки
		//let l_summ = summ.length;
		//console.log('Длинна строки_' + l_summ);
		if (summ.length==3) {
			console.log('Длинна 3 :' + summ);
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
			console.log('Пусто :' + summ);
			return Number(summ);
		}
		else {
			console.log('Более 3-х знаков :' + summ);
			summ = digit(summ);
			console.log('Длинна 2 слог :' + summ);
			if (summ<=22) {
				console.log('Меньше/равно 22 :' + summ);
				return Number(summ);
			} else {
				console.log('Опять больше 22 слог :' + summ);
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
	//alert ('Передайте разработчику - ваша ширина экрана: '+screenWidth);

	// Считывает GET переменную по тегу и отдает.
	function get(name) {
		if(name=(new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(location.search)){
			return decodeURIComponent(name[1]);
		};
	}
		// Выводим некоторую информацию перед схемой для ПЕРВОЙ половинки
	var name = get('firstname');
		console.log(name);
		$('#checkName').val(name);
	$('span.firstname').html('<b>'+name+'</b>');
	var birth = get('birthday');
		console.log(birth);
		$('#checkDate').val(birth);
	var year = birth[0] + birth[1] + birth[2] + birth[3];
	var month = birth[5] + birth[6];
	var day = birth[8] + birth[9];
	$('span.birthday').html('<b>'+day+' '+month+' '+year+'г.</b>');
	var vozr = 2024-Number(year);
	$('span.oldest').html('<b>'+vozr+'</b>');
	
		// Выводим некоторую информацию перед схемой для ВТОРОЙ половинки
	var name2 = get('firstname2');
		console.log(name2);
		$('#checkName2').val(name2);
	$('span.firstname2').html('<b>'+name2+'</b>');
	var birth2 = get('birthday2');
		console.log(birth2);
		$('#checkDate2').val(birth2);
	var year2 = birth2[0] + birth2[1] + birth2[2] + birth2[3];
	var month2 = birth2[5] + birth2[6];
	var day2 = birth2[8] + birth2[9];
	$('span.birthday2').html('<b>'+day2+' '+month2+' '+year2+'г.</b>');
	var vozr2 = 2024-Number(year2);
	$('span.oldest2').html('<b>'+vozr2+'</b>');
	
		// вычисление и установка значений 1 половинки
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

		// вычисление и установка значений 2 половинки
	aa = arcan22(+day2);
	bb = arcan22(+month2);
	cc = arcan22(+year2);
	dd = arcan22(aa+bb+cc);
	ee = arcan22(aa+bb+cc+dd);
	ff = arcan22(aa+bb);
	gg = arcan22(bb+cc);
	hh = arcan22(cc+dd);
	ii = arcan22(aa+dd);
	$('div.AA').html(aa);
	$('div.BB').html(bb);
	$('div.CC').html(cc);
	$('div.DD').html(dd);
	$('div.EE').html(ee);
	$('div.FF').html(ff);
	$('div.GG').html(gg);
	$('div.HH').html(hh);
	$('div.II').html(ii);
	
	aa2 = arcan22(ee+aa);
	bb2 = arcan22(ee+bb);
	cc2 = arcan22(ee+cc);
	dd2 = arcan22(ee+dd);
	$('div.AA2').html(aa2);
	$('div.BB2').html(bb2);
	$('div.CC2').html(cc2);
	$('div.DD2').html(dd2);
	aa1 = arcan22(aa+aa2);
	bb1 = arcan22(bb+bb2);
	cc1 = arcan22(cc+cc2);
	dd1 = arcan22(dd+dd2);
	$('div.AA1').html(aa1);
	$('div.BB1').html(bb1);
	$('div.CC1').html(cc1);
	$('div.DD1').html(dd1);
	
	ff2 = arcan22(ee+ff);
	gg2 = arcan22(ee+gg);
	hh2 = arcan22(ee+hh);
	ii2 = arcan22(ee+ii);
	$('div.FF2').html(ff2);
	$('div.GG2').html(gg2);
	$('div.HH2').html(hh2);
	$('div.II2').html(ii2);
	ff1 = arcan22(ff+ff2);
	gg1 = arcan22(gg+gg2);
	hh1 = arcan22(hh+hh2);
	ii1 = arcan22(ii+ii2);
	$('div.FF1').html(ff1);
	$('div.GG1').html(gg1);
	$('div.HH1').html(hh1);
	$('div.II1').html(ii1);

		// вычисление и установка значений совместимости 1 и 2 половинки
	aaa = arcan22(a+aa);
	bbb = arcan22(b+bb);
	ccc = arcan22(c+cc);
	ddd = arcan22(aaa+bbb+ccc);
	eee = arcan22(aaa+bbb+ccc+ddd);
	fff = arcan22(aaa+bbb);
	ggg = arcan22(bbb+ccc);
	hhh = arcan22(ccc+ddd);
	iii = arcan22(aaa+ddd);
	$('div.AAA').html(aaa);
	$('div.BBB').html(bbb);
	$('div.CCC').html(ccc);
	$('div.DDD').html(ddd);
	$('div.EEE').html(eee);
	$('div.FFF').html(fff);
	$('div.GGG').html(ggg);
	$('div.HHH').html(hhh);
	$('div.III').html(iii);
	
	aaa2 = arcan22(eee+aaa);
	bbb2 = arcan22(eee+bbb);
	ccc2 = arcan22(eee+ccc);
	ddd2 = arcan22(eee+ddd);
	$('div.AAA2').html(aaa2);
	$('div.BBB2').html(bbb2);
	$('div.CCC2').html(ccc2);
	$('div.DDD2').html(ddd2);
	aaa1 = arcan22(aaa+aaa2);
	bbb1 = arcan22(bbb+bbb2);
	ccc1 = arcan22(ccc+ccc2);
	ddd1 = arcan22(ddd+ddd2);
	$('div.AAA1').html(aaa1);
	$('div.BBB1').html(bbb1);
	$('div.CCC1').html(ccc1);
	$('div.DDD1').html(ddd1);
	
	fff2 = arcan22(eee+fff);
	ggg2 = arcan22(eee+ggg);
	hhh2 = arcan22(eee+hhh);
	iii2 = arcan22(eee+iii);
	$('div.FFF2').html(fff2);
	$('div.GGG2').html(ggg2);
	$('div.HHH2').html(hhh2);
	$('div.III2').html(iii2);
	fff1 = arcan22(fff+fff2);
	ggg1 = arcan22(ggg+ggg2);
	hhh1 = arcan22(hhh+hhh2);
	iii1 = arcan22(iii+iii2);
	$('div.FFF1').html(fff1);
	$('div.GGG1').html(ggg1);
	$('div.HHH1').html(hhh1);
	$('div.III1').html(iii1);


	aaa3 = arcan22(eee+aaa2);
	bbb3 = arcan22(eee+bbb2);
	$('div.AAA3').html(aaa3);
	$('div.BBB3').html(bbb3);
	

	// Установка значений для таблицы чакр
	$('td.A_ch').html(aaa);
	$('td.B_ch').html(bbb);
	$('td.A1_ch').html(aaa1);
	$('td.B1_ch').html(bbb1);
	$('td.A2_ch').html(aaa2);
	$('td.B2_ch').html(bbb2);
	$('td.A3_ch').html(aaa3);
	$('td.B3_ch').html(bbb3);
	$('td.E_ch').html(eee);
	$('td.E_ch').html(eee);
	$('td.C2_ch').html(ccc2);
	$('td.D2_ch').html(ddd2);
	$('td.C_ch').html(ccc);
	$('td.D_ch').html(ddd);

	A1B1_ch = arcan22(aaa1+bbb1);
	A2B2_ch = arcan22(aaa2+bbb2);
	A3B3_ch = arcan22(aaa3+bbb3);
	EE_ch = arcan22(eee+eee);
	C2D2_ch = arcan22(ccc2+ddd2);
	$('td.AB_ch').html(fff);
	$('td.A1B1_ch').html(A1B1_ch);
	$('td.A2B2_ch').html(A2B2_ch);
	$('td.A3B3_ch').html(A3B3_ch);
	$('td.EE_ch').html(EE_ch);
	$('td.C2D2_ch').html(C2D2_ch);
	$('td.CD_ch').html(hhh);

	fizika = arcan22(aaa+aaa1+aaa2+aaa3+eee+ccc2+ccc);
	energy = arcan22(bbb+bbb1+bbb2+bbb3+eee+ddd2+ddd);
	emocii = arcan22(fff+A1B1_ch+A2B2_ch+A3B3_ch+EE_ch+C2D2_ch+hhh);
	//console.log('Физика: '+fizika);
	//console.log('Энергия: '+energy);
	//console.log('Эмоции: '+emocii);
	$('td.fizika').html(fizika);
	$('td.energy').html(energy);
	$('td.emocii').html(emocii);
	
	// Установка значений эмоции, любовь и деньги
	$('div.EM').html(C2D2_ch);
	love = arcan22(C2D2_ch+ddd2);
	dengi = arcan22(C2D2_ch+ccc2);
	$('div.LOVE').html(love);
	$('div.DENGI').html(dengi);

	// Расчет предназначений
	nebo = arcan22(bbb+ddd);
	zeml = arcan22(aaa+ccc);
	seb = arcan22(nebo+zeml);
	
	rpm = arcan22(fff+hhh);
	rpzh = arcan22(ggg+iii);
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
