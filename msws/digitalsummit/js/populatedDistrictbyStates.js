function populateStates()
{ 
	
	var data=document.getElementById('country').value;
	$("#state").empty(); 
	var select = document.getElementById("state");
	if(data=='India'){
		var options = ["Andhra Pradesh", "Arunachal Pradesh", "Assam","Bihar", "Goa","Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir","Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra","Manipur", "Meghalaya", "Mizoram", "Nagaland","Odisha", "Punjab", "Rajasthan", "Sikkim","Tamil Nadu", "Tripura", "Uttar Pradesh", "West Bengal","Chhattisgarh", "Uttarakhand", "Jharkhand", "Telangana"];
	}else{ 
		var options = ["Alabama", "Alaska", "Arizona","Arkansas", "California", "Colorado","Connecticut", "Delaware", "Florida","Georgia", "Hawaii", "Idaho","Illinois", "Indiana", "Iowa","Kansas", "Kentucky", "Louisiana","Maine", "Maryland", "Massachusetts","Michigan", "Minnesota", "Mississippi","Missouri", "Montana", "Nebraska","Nevada", "New Hampshire", "New Jersey","New Mexico", "New York", "North Carolina","North Dakota", "Ohio", "Oklahoma","Oregon", "Pennsylvania", "Rhode Island","South Carolina", "South Dakota", "Tennessee","Texas", "Utah", "Vermont","Virginia", "Washington", "West Virginia","Wisconsin"];
	} 
	for(var i = 0; i < options.length; i++) { 
		var opt = options[i]; var el = document.createElement("option");
		el.textContent = opt; 
		el.value = opt; 
		select.appendChild(el);
		//alert("dwf");
		}
	}

function populateDistricts()
{ 
	var countryData=document.getElementById('country').value;
	
	if(countryData=="India"){
	var data=document.getElementById('state').value;
	$("#district").empty(); 
	var select = document.getElementById("district");
	
	if(data=='Andhra Pradesh'){
		var options = ["Anantapur", "Chittoor", "East Godavari", "Guntur","Kadapa","Krishna","Kurnool","Prakasam","Sri Potti Sriramulu","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"];
		}else if(data=='Arunachal Pradesh'){
			var options = ["Anjaw", "Central Siang", "Changlang", "Dibang Valley","East Kameng","East Siang","Kra Daadi","Kurung Kumey","Lohit","Longding","Lower Dibang Valley","Lower Subansiri","Namsai","Papum Pare","Tawang","Tirap","Upper Siang","Upper Subansiri","West Kameng","West Siang"];

		}else if(data=='Assam'){
			var options = ["Baksa", "Barpeta", "Biswanath", "Bongaigaon","Cachar","Charaideo","Chirang","Darrang","Dhemaji","Dhubri","Dibrugarh","Dima Hasao","Goalpara","Golaghat","Hailakandi","Hojai","Jorhat","Kamrup","West Kameng","Kamrup Metropolitan","Karbi Anglong","Karimganj","Kokrajhar","Lakhimpur","Majuli","Morigaon","Nagaon","Nalbari","Sivasagar","Sonitpur","South Salmara-Mankachar","Tinsukia","Udalguri","West Karbi Anglong"];			
		}else if(data=='Bihar'){
			var options = ["Araria", "Arwal", "Aurangabad", "Banka","Begusarai","Bhagalpur","Bhojpur","Buxar","Darbhanga","East Champaran","Gaya","Gopalganj","Jamui","	Jehanabad","Kaimur","Katihar","Khagaria","Kishanganj","Lakhisarai","Madhepura","Madhubani","Munger","Muzaffarpur","Nalanda","Nawada","Patna","Purnia","Rohtas","Saharsa","Samastipur","Saran","Sheikhpura","Sheohar","Sitamarhi","Siwan","Supaul","Vaishali","West Champaran"];

		}else if(data=='Chandigarh'){
			var options = ["Chandigarh"];
		}else if(data=='Mizoram'){
			var options = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
		}else if(data=='Chhattisgarh'){
			var options = ["Balod", "Baloda Bazar", "Balrampur", "Bastar","Bemetara","Bijapur","Bilaspur","Dantewada","Dhamtari","Durg","Gariaband","Janjgir Champa","Jashpur","Kabirdham","Kanker","Kondagaon","Korba","Koriya","Mahasamund","Mungeli","Narayanpur","Raigarh","Raipur","Rajnandgaon","Sukma","Surajpur","Surguja"];
		}else if(data=='Goa'){
			var options= ["North Goa","South Goa"];
		}else if(data=='Gujarat'){
			var options= ["Ahmedabad","Amreli","Anand","Aravalli","Banaskantha","Bharuch","Bhavnagar","Botad","Chhota Udaipur","Dahod","Dang","Devbhoomi Dwarka","Gandhinagar","Gir Somnath","Jamnagar","Junagadh","Kheda","Kutch","Mahisagar","Mehsana","Morbi","Narmada","Navsari","Panchmahal","Patan","Porbandar","Rajkot","Sabarkantha","Surat","Surendranagar","Tapi","Vadodara","Valsad"];
		}else if(data=='Haryana'){
			var options=["Ambala","Bhiwani","Charkhi Dadri","Faridabad","Fatehabad","Gurgaon","Hissar","Jhajjar","Jind","Kaithal","Karnal","Kurukshetra","Mahendragarh","Mewat","Palwal","Panchkula","Panipat","Rewari","Rohtak","Sirsa","Sonipat","Yamuna Nagar"];
		}else if(data=='Himachal Pradesh'){
			var options= ["Bilaspur","Chamba","Hamirpur","Kangra","Kinnaur","Kullu","Lahaul Spiti","Mandi","Shimla","Sirmaur","Solan","Una"]
	
		}else if(data=='Jammu & Kashmir'){
			var options=["Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"]			
			
		}else if(data=='Jharkhand'){
			var options= ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
		}else if(data=='Karnataka'){
			var options=["Bagalkot" ,"Bangalore" ,"Belgaum" ,"Bellary" ,"Bidar" ,"Bijapur" ,"Chamarajanagar" ,"Chikkaballapur" ,"Chikkamagaluru" ,"Chitradurga" ,"Dakshina" ,"Davanagere" ,"Dharwad" ,"Gadag" ,"Gulbarga" ,"Hassan" ,"Haveri" ,"Kodagu" ,"Kolar" ,"Koppal" ,"Mandya" ,"Mysore" ,"Raichur" ,"Ramanagara" ,"Shimoga" ,"Tumkur" ,"Udupi" ,"Uttara" ,"Yadgir"];
		}else if(data=='Kerala'){
			var options=["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
			
		}else if(data=='Madhya Pradesh'){
			var options=["Agar","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam",'Rewa',"Sagar","Satna","Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri",'Sidhi',"Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
		}else if(data=='Maharashtra'){
			var options = ["Ahmednagar","Akola", "Amravati", "Aurangabad","Beed","Bhandara","Buldhana","Chandrapur","Dhule","Gadchiroli", "Gondia","Hingoli","Jalgaon","Jalna","Kolhapur","Latur","Mumbai City","Mumbai Suburban","Nagpur","Nanded","Nandurbar","Nashik", "Osmanabad","Parbhani","Pune","Raigad","Ratnagiri","Sangli","Satara","Sindhudurg","Solapur","Thane","Wardha","Washim","yavatmal", "Palghar"];
		}		else if(data=='Manipur'){
			var options = ["Bishnupur","Thoubal","Imphal East","Imphal West","Senapati","Ukhrul","Chandel","Churachandpur","Tamenglong"];

		}else if(data=='Meghalaya'){
			var options = ["East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills", "Ri-Bhoi", "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills", "West Khasi Hills"];

		}else if(data=='Nagaland'){
			var options = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];

		}else if(data=='Odisha'){
			var options = ["Angul","Boudh(Baudh)","Balangir","Bargarh(Baragarh)","Balasore(Baleswar)","Bhadrak","Cuttack", "Debagarh(Deogarh)","Dhenkanal","Ganjam","Gajapati","Jarsuguda","Jajpur","Jagatsinghapur","Khordha","Kendujhar(Keonjhar)", "Kalahandi","Kandhamal","Koraput","Malkagiri","Mayurbhanj","Nabarangpur","Nuapada","Nayagarh","Puri","Rayagada","Sambalpur","Subarnapur(Sonepur)","Sundergarh"];

		}else if(data=='Punjab'){
			var options = ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Firozpur","Fazilka","Gurdaspur","Hoshiarpur", "Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Sri Muktsar Sahib","Pathankot","Patiala","Rupnagar","Sahibzada Ajit Singh Nagar","Sangrur","Sahid Bhagat Singh Nagar","Tarn Taran"];

		}else if(data=='Rajasthan'){
			var options = ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu", "Dausa","Dholpur","Dungarpur","Hanumangarh","Jaipur","Jaisalmer","Jalor","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota", "Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Sri Ganganagar","Tonk","Udaipur"];

		}else if(data=='Sikkim'){
			var options = ["East Sikkim","West Sikkim","North Sikkim","South Sikkim"];

		}else if(data=='Tamil Nadu'){
			var options = ["Ariyalur","Karur","Nagapattinam","Perambalur","Pudukkottai","Thanjavur","Tiruchirappalli","Tiruvarur", "Dharmapuri","Coimbatore","Erode","Krishnagiri","Namakkal","The Nilgiris","Salem","Tiruppur","Dindigul","Kanyakumari", "Madurai","Ramanathapuram","Sivaganga","Theni","Thoothukudi","Tirunelveli","Virudhunagar","Chennai","Cuddalore","Kanchipuram", "Tiruvallur","Tiruvannamalai","Vellore","Viluppuram"];

		}else if(data=='Tripura'){
			var options = ["Dhalai","Sipahijala","Khowai","Gomati","Unakoti","North Tripura","South Tripura","West Tripura"];

		}else if(data=='Uttar Pradesh'){
			var options = ["Agra"  ,"Aligarh"  ,"Allahabad"  ,"Ambedkar"  ,"Amethi"  ,"Amroha"  ,"Auraiya"  ,"Azamgarh"  ,"Baghpat"  ,"Bahraich"  ,"Ballia"  ,"Balrampur"  ,"Banda"  ,"Barabanki"  ,"Bareilly"  ,"Basti"  ,"Bijnor"  ,"Budaun"  ,"Bulandshahr"  ,"Chandauli"  ,"Chitrakoot"  ,"Deoria"  ,"Etah"  ,"Etawah"  ,"Faizabad"  ,"Farrukhabad"  ,"Fatehpur"  ,"Firozabad"  ,"Gautam"  ,"Ghaziabad"  ,"Ghazipur"  ,"Gonda"  ,"Gorakhpur"  ,"Hamirpur"  ,"Hapur"  ,"Hardoi"  ,"Hathras"  ,"Jalaun"  ,"Jaunpur"  ,"Jhansi"  ,"Kannauj"  ,"Kanpur"  ,"Kanshiram"  ,"Kaushambi"  ,"Kheri"  ,"Kushinagar"  ,"Lalitpur"  ,"Lucknow"  ,"Maharajganj"  ,"Mahoba"  ,"Mainpuri"  ,"Mathura"  ,"Mau"  ,"Meerut"  ,"Mirzapur"  ,"Moradabad"  ,"Muzaffarnagar"  ,"Pilibhit"  ,"Pratapgarh"  ,"Raebareli"  ,"Rampur"  ,"Saharanpur"  ,"Sambhal"  ,"Sant"  ,"Sant"  ,"Shahjahanpur"  ,"Shamli"  ,"Shravasti"  ,"Siddharthnagar"  ,"Sitapur"  ,"Sonbhadra"  ,"Sultanpur","Unnao","Varanasi"];

		}else if(data=='Uttarakhand'){
			var options = ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri Garhwal","Pithoragarh", "Rudraprayag","Tehri Garhwal","Udham Singh Nagar","Uttarkashi"];

		}else if(data=='West Bengal'){
			var options = ["Malda","Uttar Dinajpur","Dakshin Dinajpur","Murshidabad","Birbhum","Hooghly","Paschim Bardhaman", "Purba Bardhaman","Alipurduar","Cooch Behar","Darjeeling","Jalpaiguri","Kalimpong","Howrah","Kolkata","Nadia","North 24 Parganas  (Uttar 24 Parganas)","South 24 Parganas  (Dakshin 24 Parganas)","Bankura","Jhargram","Purulia","Purba Medinipur","Paschim Medinipur"];

		}else if(data=='Telangana'){
			var options = ["Adilabad","Bhadradri Kothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar Bhupalpally","Jogulamba Gadwal","Kamareddy","Karimnagar","Khammam","Kumarambheem Asifabad","Mahabubabad","Mahabubnagar","Mancherial","Medak","Medchalâ€“Malkajgiri","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajanna Sircilla","Ranga Reddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal Rural","Warangal Urban","Yadadri Bhuvanagiri"];

		}
		else{

		}
	
	for(var i = 0; i < options.length; i++) { 
		var opt = options[i]; var el = document.createElement("option");
		el.textContent = opt; 
		el.value = opt; 
		select.appendChild(el);
		}
	}
	}



function checkCountry(obj){
	if(obj.value=="USA"){
		$("#districtDiv").hide();
		
	}else {
		$("#districtDiv").show();
	}
}

	