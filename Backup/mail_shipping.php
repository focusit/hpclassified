<script language="javascript">
function strlen(inputStr)
{
	for(i=0;i<inputStr.length; i++);
		return i;
}

function calldistricts(sname,n)
	{
		var distt="";
		if(sname=="Andhra Pradesh")
		{																																									
			
			distt='';
			distt+='<option value="District">District</option><option value="Adilabad">Adilabad</option><option value="Anantapur">Anantapur</option><option value="Chittoor">Chittoor</option><option value="East Godavari">East Godavari</option><option value="Guntur">Guntur</option><option value="Hyderabad">Hyderabad</option><option value="Kadapa">Kadapa</option><option value="Karimnagar">Karimnagar</option><option value="Khammam">Khammam</option><option value="Krishna">Krishna</option><option value="Kurnool">Kurnool</option><option value="Mahabubnagar">Mahabubnagar</option><option value="Medak">Medak</option><option value="Nalgonda">Nalgonda</option><option value="Nellore">Nellore</option><option value="Nizamabad">Nizamabad</option><option value="Prakasam">Prakasam</option><option value="Rangareddi">Rangareddi</option><option value="Srikakulam">Srikakulam</option><option value="Vishakhapatnam">Vishakhapatnam</option><option value="Vizianagaram">Vizianagaram</option><option value="Warangal">Warangal</option><option value="West Godavari">West Godavari</option>';
		}
		else if(sname=="Arunachal Pradesh")
		{
			distt='';
			distt+='<option value="District">District</option><option value="Anjaw">Anjaw</option><option value="Changlang">Changlang</option><option value="East Kameng">East Kameng</option><option value="Lohit">Lohit</option><option value="Lower Subansiri">Lower Subansiri</option><option value="Papum Pare">Papum Pare</option><option value="Tirap">Tirap</option><option value="Dibang Valley">Dibang Valley</option><option value="Upper Subansiri">Upper Subansiri</option><option value="West Kameng">West Kameng</option>';
		}
		else if(sname=="Assam")
		{
			distt=''+
			'<option value="District">District</option><option value="Barpeta">Barpeta</option><option value="Bongaigaon">Bongaigaon</option><option value="Cachar">Cachar</option><option value="Darrang">Darrang</option><option value="Dhemaji">Dhemaji</option><option value="Dhubri">Dhubri</option><option value="Dibrugarh">Dibrugarh</option><option value="Goalpara">Goalpara</option><option value="Golaghat">Golaghat</option><option value="Hailakandi">Hailakandi</option><option value="Jorhat">Jorhat</option><option value="Karbi Anglong">Karbi Anglong</option><option value="Karimganj">Karimganj</option><option value="Kokrajhar">Kokrajhar</option><option value="Lakhimpur">Lakhimpur</option><option value="Marigaon">Marigaon</option><option value="Nagaon">Nagaon</option><option value="Nalbari">Nalbari</option><option value="North Cachar Hills">North Cachar Hills</option><option value="Sibsagar">Sibsagar</option><option value="Sonitpur">Sonitpur</option><option value="Tinsukia">Tinsukia</option>';
		}
		else if(sname=="Bihar")
		{
			distt=''+
			'<option value="District">District</option><option value="Araria">Araria</option><option value="Arwal">Arwal</option><option value="Aurangabad">Aurangabad</option><option value="Banka">Banka</option><option value="Begusarai">Begusarai</option><option value="Bhagalpur">Bhagalpur</option><option value="Bhojpur">Bhojpur</option><option value="Buxar">Buxar</option><option value="Darbhanga">Darbhanga</option><option value="East Champaran">East Champaran</option><option value="Gaya">Gaya</option><option value="Gopalganj">Gopalganj</option><option value="Jamui">Jamui</option><option value="Jehanabad">Jehanabad</option><option value="Khagaria">Khagaria</option><option value="Kishanganj">Kishanganj</option><option value="Kaimur">Kaimur</option><option value="Katihar">Katihar</option><option value="Lakhisarai">Lakhisarai</option><option value="Madhubani">Madhubani</option><option value="Munger">Munger</option><option value="Madhepura">Madhepura</option><option value="Muzaffarpur">Muzaffarpur</option><option value="Nalanda">Nalanda</option><option value="Nawada">Nawada</option><option value="Patna">Patna</option><option value="Purnia">Purnia</option><option value="Rohtas">Rohtas</option><option value="Saharsa">Saharsa</option><option value="Samastipur">Samastipur</option><option value="Sheohar">Sheohar</option><option value="Sheikhpura">Sheikhpura</option><option value="Saran">Saran</option><option value="Sitamarhi">Sitamarhi</option><option value="Supaul">Supaul</option><option value="Siwan">Siwan</option><option value="Vaishali">Vaishali</option><option value="West Champaran">West Champaran</option>';
		}
		else if(sname=="Chhattisgarh")
		{
			distt=''+
			'<option value="District">District</option><option value="Bastar">Bastar</option><option value="Bilaspur">Bilaspur</option><option value="Dantewada">Dantewada</option><option value="Dhamtari">Dhamtari</option><option value="Durg">Durg</option><option value="Jashpur">Jashpur</option><option value="Janjgir-Champa">Janjgir-Champa</option><option value="Korba">Korba</option><option value="Koriya">Koriya</option><option value="Kanker">Kanker</option><option value="Kawardha">Kawardha</option><option value="Mahasamund">Mahasamund</option><option value="Raigarh">Raigarh</option><option value="Rajnandgaon">Rajnandgaon</option><option value="Raipur">Raipur</option><option value="Surguja">Surguja</option>';
		}
		else if(sname=="Goa")
		{
			distt=''+
			'<option value="District">District</option><option value="North Goa">North Goa</option><option value="South Goa">South Goa</option>';
		}
		else if(sname=="Gujarat")
		{
			distt=''+
			'<option value="District">District</option><option value="Amdavad">Amdavad</option><option value="Amreli District">Amreli District</option><option value="Anand">Anand</option><option value="Banaskantha">Banaskantha</option><option value="Bharuch">Bharuch</option><option value="Bhavnagar">Bhavnagar</option><option value="Dahod">Dahod</option><option value="The Dangs">The Dangs</option><option value="Gandhinagar">Gandhinagar</option><option value="Jamnagar">Jamnagar</option><option value="Junagadh">Junagadh</option><option value="Kutch">Kutch</option><option value="Kheda">Kheda</option><option value="Mehsana">Mehsana</option><option value="Narmada">Narmada</option><option value="Navsari">Navsari</option><option value="Patan">Patan</option><option value="Panchmahal">Panchmahal</option><option value="Porbandar">Porbandar</option><option value="Rajkot">Rajkot</option><option value="Sabarkantha">Sabarkantha</option><option value="Surendranagar">Surendranagar</option><option value="Surat">Surat</option><option value="Vadodara">Vadodara</option><option value="Valsad">Valsad</option>';
		}
		else if(sname=="Haryana")
		{
			distt=''+
			'<option value="District">District</option><option value="Ambala">Ambala</option><option value="Bhiwani">Bhiwani</option><option value="Faridabad">Faridabad</option><option value="Fatehabad">Fatehabad</option><option value="Gurgaon">Gurgaon</option><option value="Hissar">Hissar</option><option value="Jhajjar">Jhajjar</option><option value="Jind">Jind</option><option value="Karnal">Karnal</option><option value="Kaithal">Kaithal</option><option value="Kurukshetra">Kurukshetra</option><option value="Mahendragarh">Mahendragarh</option><option value="Mewat">Mewat</option><option value="Panchkula">Panchkula</option><option value="Panipat">Panipat</option><option value="Rewari">Rewari</option><option value="Rohtak">Rohtak</option><option value="Sirsa">Sirsa</option><option value="Sonepat">Sonepat</option><option value="Yamuna Nagar">Yamuna Nagar</option><option value="Palwal">Palwal</option>';
		}
		else if(sname=="Himachal Pradesh")
		{
			distt=''+
			'<option value="District">District</option><option value="Bilaspur">Bilaspur</option><option value="Chamba">Chamba</option><option value="Hamirpur">Hamirpur</option><option value="Kangra">Kangra</option><option value="Kinnaur">Kinnaur</option><option value="Kulu">Kulu</option><option value="Lahaul and Spiti">Lahaul and Spiti</option><option value="Mandi">Mandi</option><option value="Shimla">Shimla</option><option value="Sirmaur">Sirmaur</option><option value="Solan">Solan</option><option value="Una">Una</option>';
		}
		else if(sname=="Jammu and Kashmir")
		{
			distt=''+
			'<option value="District">District</option><option value="Anantnag">Anantnag</option><option value="Badgam">Badgam</option><option value="Bandipore">Bandipore</option><option value="Baramula">Baramula</option><option value="Doda">Doda</option><option value="Jammu">Jammu</option><option value="Kargil">Kargil</option><option value="Kathua">Kathua</option><option value="Kupwara">Kupwara</option><option value="Leh">Leh</option><option value="Poonch">Poonch</option><option value="Pulwama">Pulwama</option><option value="Rajauri">Rajauri</option><option value="Srinagar">Srinagar</option><option value="Samba">Samba</option><option value="Udhampur">Udhampur</option>';
		}
		else if(sname=="Jharkhand")
		{
			distt=''+
			'<option value="District">District</option><option value="Bokaro">Bokaro</option><option value="Chatra">Chatra</option><option value="Deoghar">Deoghar</option><option value="Dhanbad">Dhanbad</option><option value="Dumka">Dumka</option><option value="Purba Singhbhum">Purba Singhbhum</option><option value="Garhwa">Garhwa</option><option value="Giridih">Giridih</option><option value="Godda">Godda</option><option value="Gumla">Gumla</option><option value="Hazaribagh">Hazaribagh</option><option value="Koderma">Koderma</option><option value="Lohardaga">Lohardaga</option><option value="Pakur">Pakur</option><option value="Palamu">Palamu</option><option value="Ranchi">Ranchi</option><option value="Sahibganj">Sahibganj</option><option value="Seraikela & Kharsawan">Seraikela & Kharsawan</option><option value="Pashchim Singhbhum">Pashchim Singhbhum</option><option value="Ramgarh">Ramgarh</option>';
		}
		else if(sname=="Karnataka")
		{
			distt=''+
			'<option value="District">District</option><option value="Bidar">Bidar</option><option value="Belgaum">Belgaum</option><option value="Bijapur">Bijapur</option><option value="Bagalkot">Bagalkot</option><option value="Bellary">Bellary</option><option value="Bangalore Rural District">Bangalore Rural District</option><option value="Bangalore Urban district">Bangalore Urban district</option><option value="Chamarajnagar">Chamarajnagar</option><option value="Chikmagalur">Chikmagalur</option><option value="Chitradurga">Chitradurga</option><option value="Davanagere">Davanagere</option><option value="Dharwad">Dharwad</option><option value="Dakshina Kannada">Dakshina Kannada</option><option value="Gadag">Gadag</option><option value="Gulbarga">Gulbarga</option><option value="Hassan">Hassan</option><option value="Haveri District">Haveri District</option><option value="Kodagu">Kodagu</option><option value="Kolar">Kolar</option><option value="Koppal">Koppal</option><option value="Mandya">Mandya</option><option value="Mysore">Mysore</option><option value="Raichur">Raichur</option><option value="Shimoga">Shimoga</option><option value="Tumkur">Tumkur</option><option value="Udupi">Udupi</option><option value="Uttara Kannada">Uttara Kannada</option><option value="Ramanagara">Ramanagara</option><option value="Chikballapur">Chikballapur</option><option value="Yadagiri">Yadagiri</option>';
		}
		else if(sname=="Kerala")
		{
			distt=''+
			'<option value="District">District</option><option value="Alappuzha">Alappuzha</option><option value="Ernakulam">Ernakulam</option><option value="Idukki">Idukki</option><option value="Kollam">Kollam</option><option value="Kannur">Kannur</option><option value="Kasaragod">Kasaragod</option><option value="Kottayam">Kottayam</option><option value="Kozhikode">Kozhikode</option><option value="Malappuram">Malappuram</option><option value="Palakkad">Palakkad</option><option value="Pathanamthitta">Pathanamthitta</option><option value="Thrissur">Thrissur</option><option value="Thiruvananthapuram">Thiruvananthapuram</option><option value="Wayanad">Wayanad</option>';
		}
		else if(sname=="Madhya Pradesh")
		{
			distt=''+
			'<option value="District">District</option><option value="Alirajpur">Alirajpur</option><option value="Anuppur">Anuppur</option><option value="Ashok Nagar">Ashok Nagar</option><option value="Balaghat">Balaghat</option><option value="Barwani">Barwani</option><option value="Betul">Betul</option><option value="Bhind">Bhind</option><option value="Bhopal">Bhopal</option><option value="Burhanpur">Burhanpur</option><option value="Chhatarpur">Chhatarpur</option><option value="Chhindwara">Chhindwara</option><option value="Damoh">Damoh</option><option value="Datia">Datia</option><option value="Dewas">Dewas</option><option value="Dhar">Dhar</option><option value="Dindori">Dindori</option><option value="Guna">Guna</option><option value="Gwalior">Gwalior</option><option value="Harda">Harda</option><option value="Hoshangabad">Hoshangabad</option><option value="Indore">Indore</option><option value="Jabalpur">Jabalpur</option><option value="Jhabua">Jhabua</option><option value="Katni">Katni</option><option value="Khandwa (East Nimar)">Khandwa (East Nimar)</option><option value="Khargone (West Nimar)">Khargone (West Nimar)</option><option value="Mandla">Mandla</option><option value="Mandsaur">Mandsaur</option><option value="Morena">Morena</option><option value="Narsinghpur">Narsinghpur</option><option value="Neemuch">Neemuch</option><option value="Panna">Panna</option><option value="Rewa">Rewa</option><option value="Rajgarh">Rajgarh</option><option value="Ratlam">Ratlam</option><option value="Raisen">Raisen</option><option value="Sagar">Sagar</option><option value="Satna">Satna</option><option value="Sehore">Sehore</option><option value="Seoni">Seoni</option><option value="Shahdol">Shahdol</option><option value="Shajapur">Shajapur</option><option value="Sheopur">Sheopur</option><option value="Shivpuri">Shivpuri</option><option value="Sidhi">Sidhi</option><option value="Singrauli">Singrauli</option><option value="Tikamgarh">Tikamgarh</option><option value="Ujjain">Ujjain</option><option value="Umaria">Umaria</option><option value="Vidisha">Vidisha</option>';
		}
		else if(sname=="Maharashtra")
		{
			distt=''+
			'<option value="District">District</option><option value="Ahmednagar">Ahmednagar</option><option value="Akola">Akola</option><option value="Amrawati">Amrawati</option><option value="Aurangabad">Aurangabad</option><option value="Bhandara">Bhandara</option><option value="Beed">Beed</option><option value="Buldhana">Buldhana</option><option value="Chandrapur">Chandrapur</option><option value="Dhule">Dhule</option><option value="Gadchiroli">Gadchiroli</option><option value="Gondiya">Gondiya</option><option value="Hingoli">Hingoli</option><option value="Jalgaon">Jalgaon</option><option value="Jalna">Jalna</option><option value="Kolhapur">Kolhapur</option><option value="Latur">Latur</option><option value="Mumbai City">Mumbai City</option><option value="Mumbai suburban">Mumbai suburban</option><option value="Nandurbar">Nandurbar</option><option value="Nanded">Nanded</option><option value="Nagpur">Nagpur</option><option value="Nashik">Nashik</option><option value="Osmanabad">Osmanabad</option><option value="Parbhani">Parbhani</option><option value="Pune">Pune</option><option value="Raigad">Raigad</option><option value="Ratnagiri">Ratnagiri</option><option value="Sindhudurg">Sindhudurg</option><option value="Sangli">Sangli</option><option value="Solapur">Solapur</option><option value="Satara">Satara</option><option value="Thane">Thane</option><option value="Wardha">Wardha</option><option value="Washim">Washim</option><option value="Yavatmal">Yavatmal</option>';
		}
		else if(sname=="Manipur")
		{
			distt=''+
			'<option value="District">District</option><option value="Bishnupur">Bishnupur</option><option value="Churachandpur">Churachandpur</option><option value="Chandel">Chandel</option><option value="Imphal East">Imphal East</option><option value="Senapati">Senapati</option><option value="Tamenglong">Tamenglong</option><option value="Thoubal">Thoubal</option><option value="Ukhrul">Ukhrul</option><option value="Imphal West">Imphal West</option>';
		}
		else if(sname=="Meghalaya")
		{
			distt=''+
			'<option value="District">District</option><option value="East Garo Hills">East Garo Hills</option><option value="East Khasi Hills">East Khasi Hills</option><option value="Jaintia Hills">Jaintia Hills</option><option value="Ri-Bhoi">Ri-Bhoi</option><option value="South Garo Hills">South Garo Hills</option><option value="West Garo Hills">West Garo Hills</option><option value="West Khasi Hills">West Khasi Hills</option>';
		}
		else if(sname=="Mizoram")
		{
			distt=''+
			'<option value="District">District</option><option value="Aizawl">Aizawl</option><option value="Champhai">Champhai</option><option value="Kolasib">Kolasib</option><option value="Lawngtlai">Lawngtlai</option><option value="Lunglei">Lunglei</option><option value="Mamit">Mamit</option><option value="Saiha">Saiha</option><option value="Serchhip">Serchhip</option>';
		}
		else if(sname=="Nagaland")
		{
			distt=''+
			'<option value="District">District</option><option value="Dimapur">Dimapur</option><option value="Kohima">Kohima</option><option value="Mokokchung">Mokokchung</option><option value="Mon">Mon</option><option value="Phek">Phek</option><option value="Tuensang">Tuensang</option><option value="Wokha">Wokha</option><option value="Zunheboto">Zunheboto</option>';
		}
		else if(sname=="Orissa")
		{
			distt=''+
			'<option value="District">District</option><option value="Angul">Angul</option><option value="Boudh (Bauda)">Boudh (Bauda)</option><option value="Bhadrak">Bhadrak</option><option value="Bolangir (Balangir)">Bolangir (Balangir)</option><option value="Bargarh (Baragarh)">Bargarh (Baragarh)</option><option value="Baleswar (Balasore)">Baleswar (Balasore)</option><option value="Cuttack">Cuttack</option><option value="Debagarh (Deogarh)">Debagarh (Deogarh)</option><option value="Dhenkanal">Dhenkanal</option><option value="Ganjam">Ganjam</option><option value="Gajapati">Gajapati</option><option value="Jharsuguda">Jharsuguda</option><option value="Jajapur (Jajpur)">Jajapur (Jajpur)</option><option value="Jagatsinghpur">Jagatsinghpur</option><option value="Khordha">Khordha</option><option value="Kendujhar (Keonjhar)">Kendujhar (Keonjhar)</option><option value="Kalahandi">Kalahandi</option><option value="Kandhamal">Kandhamal</option><option value="Koraput">Koraput</option><option value="Kendrapara">Kendrapara</option><option value="Malkangiri">Malkangiri</option><option value="Mayurbhanj">Mayurbhanj</option><option value="Nabarangpur">Nabarangpur</option><option value="Nuapada">Nuapada</option><option value="Nayagarh">Nayagarh</option><option value="Puri">Puri</option><option value="Rayagada">Rayagada</option><option value="Sambalpur">Sambalpur</option><option value="Subarnapur (Sonepur)">Subarnapur (Sonepur)</option><option value="Sundargarh (Sundergarh)">Sundargarh (Sundergarh)</option>';
		}
		else if(sname=="Punjab")
		{
			distt=''+
			'<option value="District">District</option><option value="Amritsar">Amritsar</option><option value="Bathinda">Bathinda</option><option value="Firozpur">Firozpur</option><option value="Faridkot">Faridkot</option><option value="Fatehgarh Sahib">Fatehgarh Sahib</option><option value="Gurdaspur">Gurdaspur</option><option value="Hoshiarpur">Hoshiarpur</option><option value="Jalandhar">Jalandhar</option><option value="Kapurthala">Kapurthala</option><option value="Ludhiana">Ludhiana</option><option value="Mansa">Mansa</option><option value="Moga">Moga</option><option value="Mukatsar">Mukatsar</option><option value="Nawan Shehar">Nawan Shehar</option><option value="Patiala">Patiala</option><option value="Rupnagar">Rupnagar</option><option value="Sangrur">Sangrur</option>';
		}
		else if(sname=="Rajasthan")
		{
			distt=''+
			'<option value="District">District</option><option value="Ajmer">Ajmer</option><option value="Alwar">Alwar</option><option value="Bikaner">Bikaner</option><option value="Barmer">Barmer</option><option value="Banswara">Banswara</option><option value="Bharatpur">Bharatpur</option><option value="Baran">Baran</option><option value="Bundi">Bundi</option><option value="Bhilwara">Bhilwara</option><option value="Churu">Churu</option><option value="Chittorgarh">Chittorgarh</option><option value="Dausa">Dausa</option><option value="Dholpur">Dholpur</option><option value="Dungapur">Dungapur</option><option value="Ganganagar">Ganganagar</option><option value="Hanumangarh">Hanumangarh</option><option value="Juhnjhunun">Juhnjhunun</option><option value="Jalore">Jalore</option><option value="Jodhpur">Jodhpur</option><option value="Jaipur">Jaipur</option><option value="Jaisalmer">Jaisalmer</option><option value="Jhalawar">Jhalawar</option><option value="Karauli">Karauli</option><option value="Kota">Kota</option><option value="Nagaur">Nagaur</option><option value="Pali">Pali</option><option value="Pratapgarh">Pratapgarh</option><option value="Rajsamand">Rajsamand</option><option value="Sikar">Sikar</option><option value="Sawai Madhopur">Sawai Madhopur</option><option value="Sirohi">Sirohi</option><option value="Tonk">Tonk</option><option value="Udaipur">Udaipur</option>';
		}
		else if(sname=="Sikkim")
		{
			distt=''+
			'<option value="District">District</option><option value="East Sikkim">East Sikkim</option><option value="North Sikkim">North Sikkim</option><option value="South Sikkim">South Sikkim</option><option value="West Sikkim">West Sikkim</option>';
		}
		else if(sname=="Tamil Nadu")
		{
			distt=''+
			'<option value="District">District</option><option value="Ariyalur">Ariyalur</option><option value="Chennai">Chennai</option><option value="Coimbatore">Coimbatore</option><option value="Cuddalore">Cuddalore</option><option value="Dharmapuri">Dharmapuri</option><option value="Dindigul">Dindigul</option><option value="Erode">Erode</option><option value="Kanchipuram">Kanchipuram</option><option value="Kanyakumari">Kanyakumari</option><option value="Karur">Karur</option><option value="Madurai">Madurai</option><option value="Nagapattinam">Nagapattinam</option><option value="The Nilgiris">The Nilgiris</option><option value="Namakkal">Namakkal</option><option value="Perambalur">Perambalur</option><option value="Pudukkottai">Pudukkottai</option><option value="Ramanathapuram">Ramanathapuram</option><option value="Salem">Salem</option><option value="Sivagangai">Sivagangai</option><option value="Tiruppur">Tiruppur</option><option value="Tiruchirappalli">Tiruchirappalli</option><option value="Theni">Theni</option><option value="Tirunelveli">Tirunelveli</option><option value="Thanjavur">Thanjavur</option><option value="Thoothukudi">Thoothukudi</option><option value="Thiruvallur">Thiruvallur</option><option value="Thiruvarur">Thiruvarur</option><option value="Tiruvannamalai">Tiruvannamalai</option><option value="Vellore">Vellore</option><option value="Villupuram">Villupuram</option>';
		}
		else if(sname=="Tripura")
		{
			distt=''+
			'<option value="District">District</option><option value="Dhalai">Dhalai</option><option value="North Tripura">North Tripura</option><option value="South Tripura">South Tripura</option><option value="West Tripura">West Tripura</option>';
		}
		else if(sname=="Uttar Pradesh")
		{
			distt=''+
			'<option value="District">District</option><option value="Agra">Agra</option><option value="Allahabad">Allahabad</option><option value="Aligarh">Aligarh</option><option value="Ambedkar Nagar">Ambedkar Nagar</option><option value="Auraiya">Auraiya</option><option value="Azamgarh">Azamgarh</option><option value="Barabanki">Barabanki</option><option value="Badaun">Badaun</option><option value="Bagpat">Bagpat</option><option value="Bahraich">Bahraich</option><option value="Bijnor">Bijnor</option><option value="Ballia">Ballia</option><option value="Banda">Banda</option><option value="Balrampur">Balrampur</option><option value="Bareilly">Bareilly</option><option value="Basti">Basti</option><option value="Bulandshahr">Bulandshahr</option><option value="Chandauli">Chandauli</option><option value="Chitrakoot">Chitrakoot</option><option value="Deoria">Deoria</option><option value="Etah">Etah</option><option value="Kanshiram Nagar">Kanshiram Nagar</option><option value="Etawah">Etawah</option><option value="Firozabad">Firozabad</option><option value="Farrukhabad">Farrukhabad</option><option value="Fatehpur">Fatehpur</option><option value="Faizabad">Faizabad</option><option value="Gautam Buddha Nagar">Gautam Buddha Nagar</option><option value="Gonda">Gonda</option><option value="Ghazipur">Ghazipur</option><option value="Gorkakhpur">Gorkakhpur</option><option value="Ghaziabad">Ghaziabad</option><option value="Hamirpur">Hamirpur</option><option value="Hardoi">Hardoi</option><option value="Mahamaya Nagar">Mahamaya Nagar</option><option value="Jhansi">Jhansi</option><option value="Jalaun">Jalaun</option><option value="Jyotiba Phule Nagar">Jyotiba Phule Nagar</option><option value="Jaunpur District">Jaunpur District</option><option value="Kanpur Dehat, Ramabai nagar">Kanpur Dehat, Ramabai nagar</option><option value="Kannauj">Kannauj</option><option value="Kanpur Nagar">Kanpur Nagar</option><option value="Kaushambi">Kaushambi</option><option value="Kushinagar">Kushinagar</option><option value="Lalitpur">Lalitpur</option><option value="Lakhimpur Kheri">Lakhimpur Kheri</option><option value="Lucknow">Lucknow</option><option value="Mau">Mau</option><option value="Meerut">Meerut</option><option value="Maharajganj">Maharajganj</option><option value="Mahoba">Mahoba</option><option value="Mirzapur">Mirzapur</option><option value="Moradabad">Moradabad</option><option value="Mainpuri">Mainpuri</option><option value="Mathura">Mathura</option><option value="Muzaffarnagar">Muzaffarnagar</option><option value="Pilibhit">Pilibhit</option><option value="Pratapgarh">Pratapgarh</option><option value="Rampur">Rampur</option><option value="Rae Bareli">Rae Bareli</option><option value="Saharanpur">Saharanpur</option><option value="Sitapur">Sitapur</option><option value="Shahjahanpur">Shahjahanpur</option><option value="Sant Kabir Nagar">Sant Kabir Nagar</option><option value="Siddharthnagar">Siddharthnagar</option><option value="Sonbhadra">Sonbhadra</option><option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option><option value="Sultanpur">Sultanpur</option><option value="Shravasti">Shravasti</option><option value="Unnao">Unnao</option><option value="Varanasi">Varanasi</option>';
		}
		else if(sname=="Uttarakhand")
		{
			distt=''+
			'<option value="District">District</option><option value="Almora">Almora</option><option value="Bageshwar">Bageshwar</option><option value="Chamoli">Chamoli</option><option value="Champawat">Champawat</option><option value="Dehradun">Dehradun</option><option value="Haridwar">Haridwar</option><option value="Nainital">Nainital</option><option value="Pauri Garhwal">Pauri Garhwal</option><option value="Pithoragharh">Pithoragharh</option><option value="Rudraprayag">Rudraprayag</option><option value="Tehri Garhwal">Tehri Garhwal</option><option value="Udham Singh Nagar">Udham Singh Nagar</option><option value="Uttarkashi">Uttarkashi</option>';
		}
		else if(sname=="West Bengal")
		{
			distt=''+
			'<option value="District">District</option><option value="Birbhum">Birbhum</option><option value="Bankura">Bankura</option><option value="Bardhaman">Bardhaman</option><option value="Darjeeling">Darjeeling</option><option value="Dakshin Dinajpur">Dakshin Dinajpur</option><option value="Hooghly">Hooghly</option><option value="Howrah">Howrah</option><option value="Jalpaiguri">Jalpaiguri</option><option value="Cooch Behar">Cooch Behar</option><option value="Kolkata">Kolkata</option><option value="Malda">Malda</option><option value="Midnapore">Midnapore</option><option value="Murshidabad">Murshidabad</option><option value="Nadia">Nadia</option><option value="North 24 Parganas">North 24 Parganas</option><option value="South 24 Parganas">South 24 Parganas</option><option value="Purulia">Purulia</option><option value="Uttar Dinajpur">Uttar Dinajpur</option>';
		}
		else
		{
			distt='<option value="'+sname+'">'+sname+'</option>';
		}
		if(n)
			document.getElementById("distDiv1").innerHTML='<select name="cb_district" id="cb_district">'+distt+'</select>';								
		
	}
function refill()
{
document.getElementById("nameDiv").innerHTML="";
document.getElementById("emailDiv").innerHTML="";
document.getElementById("usernameDiv").innerHTML="";
document.getElementById("vpassDiv").innerHTML="";
document.getElementById("passwordDiv").innerHTML="";
document.getElementById("orgDiv").innerHTML="";
document.getElementById("addressDiv").innerHTML="";
document.getElementById("cityDiv").innerHTML="";
document.getElementById("distDiv").innerHTML="";
document.getElementById("pinDiv").innerHTML="";
document.getElementById("stateDiv").innerHTML="";
document.getElementById("phoneDiv").innerHTML="";
document.getElementById("person1Div").innerHTML="";
document.getElementById("mobileDiv").innerHTML="";
document.getElementById("shipingaddressDiv").innerHTML="";
document.getElementById("tinnoDiv").innerHTML="";
document.getElementById("cstDiv").innerHTML="";
document.getElementById("panDiv").innerHTML="";
document.getElementById("typeoforgDiv").innerHTML="";
document.getElementById("noofdirDiv").innerHTML="";
document.getElementById("noofparDiv").innerHTML="";
document.getElementById("bankDiv").innerHTML="";
document.getElementById("accountnoDiv").innerHTML="";
document.getElementById("bankaddressDiv").innerHTML="";
document.getElementById("neftDiv").innerHTML="";
}
function isPosInteger(inputVal)
{
	inputStr = inputVal.toString()
	for (var i = 0; i < inputStr.length; i++)
	{
	    var oneChar = inputStr.charAt(i)
	    if (oneChar < "0" || oneChar > "9")
		{
			return false
	    }
	 }
	return true
}
function dob(inputVal)
{
       inputStr = inputVal.toString()
       for (var i = 0; i < inputStr.length; i++)
	   {
	   		var oneChar = inputStr.charAt(i)
	   		
 	   		if (oneChar < "0" || oneChar > "9")
			{
	      		return false
	   		}
	   }
        return true
}

 function func()
 {
  flag=1;
  refill();
   val=document.getElementById("name").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("nameDiv").innerHTML="<font color=red><b>Enter your name</b></font>";
	flag=0;
	return false;
   }
  val=document.getElementById("email").value;
  if(strlen(val) <= 0 )
  {
    document.getElementById("emailDiv").innerHTML="<font color=red><b>Enter your valid E-Mail id in this field</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("username").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("usernameDiv").innerHTML="<font color=red><b>Enter User Name in this field</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("password").value;
  if(strlen(val) <= 0 || strlen(val) <= 6)
  {
    document.getElementById("passwordDiv").innerHTML="<font color=red><b>Password Should be More Then 6 Digits</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("password__verify").value;
   val1=document.getElementById("password").value;
  if(strlen(val) <= 0 || val != val1)
  {
    document.getElementById("vpassDiv").innerHTML="<font color=red><b>Did'nt Match Password</b></font>";
	flag=0;
	return false;
   }
   
   val=document.getElementById("cb_nameoforganisation").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("orgDiv").innerHTML="<font color=red><b>Enter the name of organisation </b></font>";
	flag=0;
	return false;
   }
  
   val=document.getElementById("cb_mainaddress").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("addressDiv").innerHTML="<font color=red><b>Enter Address</b></font>";
	flag=0;
	return false;
   }
    val=document.getElementById("cb_state").value;
  if(strlen(val) <= 0 || val == "Select")
  {
    document.getElementById("stateDiv").innerHTML="<font color=red><b>Select State</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_district").value;
  if(strlen(val) <= 0 || val == "Select State")
  {
    document.getElementById("distDiv").innerHTML="<font color=red><b>Select District</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_city").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("cityDiv").innerHTML="<font color=red><b>Enter City</b></font>";
	flag=0;
	return false;
   }
   
   val=document.getElementById("cb_pincode").value;
  if(strlen(val) <= 0 || !isPosInteger(val))
  {
    document.getElementById("pinDiv").innerHTML="<font color=red><b>Enter Your Valid Pin Code</b></font>";
	flag=0;
	return false;
   }
  
   val=document.getElementById("cb_landlineno").value;
  if(strlen(val) <= 6 || strlen(val) >= 11 ||  !isPosInteger(val))
  {
    document.getElementById("phoneDiv").innerHTML="<font color=red><b>Phone Field Cannot be Empty or Less than 6 Digits or More Than 11 Digits!</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_contactperson1").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("person1Div").innerHTML="<font color=red><b>Contact Person</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_mobile1").value;
 if(strlen(val) <= 0 || strlen(val) >= 11 || !isPosInteger(val))
  {
    document.getElementById("mobileDiv").innerHTML="<font color=red><b>Mobile Field Cannot be Empty or Less than 10 Digits!</b></font>";
	flag=0;
	return false;
   }
  
    val=document.getElementById("cb_shippingaddress1").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("shipingaddressDiv").innerHTML="<font color=red><b>Enter Your Shipping Address:</b></font>";
	flag=0;
	return false;
   }
    val=document.getElementById("cb_tinno").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("tinnoDiv").innerHTML="<font color=red><b>Enter TIN No:</b></font>";
	flag=0;
	return false;
   }
    val=document.getElementById("cb_cstno").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("cstDiv").innerHTML="<font color=red><b>Enter CST No:</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_panno").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("panDiv").innerHTML="<font color=red><b>Enter PAN No:</b></font>";
	flag=0;
	return false;
   }
    val=document.getElementById("cb_typeoforganisation").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("typeoforgDiv").innerHTML="<font color=red><b>Enter Type Of Organisation:</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_bankname").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("bankDiv").innerHTML="<font color=red><b>Enter Name Of Bank:</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_bankaddress").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("bankaddressDiv").innerHTML="<font color=red><b>Enter The Bank Address:</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_accountno").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("accountnoDiv").innerHTML="<font color=red><b>Enter Account No:</b></font>";
	flag=0;
	return false;
   }
   val=document.getElementById("cb_ifscneftcode").value;
  if(strlen(val) <= 0)
  {
    document.getElementById("neftDiv").innerHTML="<font color=red><b>Enter IFSC / NEFT Code:</b></font>";
	flag=0;
	return false;
   }
  
}
</script>

<form action="?q=node/29" method="post" id="adminForm" name="adminForm" onsubmit="return func()" target="_blank" enctype="multipart/form-data">
<table ><tr >
<td ><label for="name" title="Name:Please enter your real full name.">Name:</label></td>
<td ><input type="text" name="name" id="name" value=""   size="25"   title="Name: Please enter your real full name." /><span ></span></td><td><div id="nameDiv"></div></td>
</tr>
	<tr>
	<td  ><label for="email" title="Email:Please enter a valid e-mail address. A confirmation email will be sent to this address upon registration.">Email:</label></td>
	<td   ><input type="text" name="email" id="email" value=""  size="25"  title="Email: Please enter a valid e-mail address. A confirmation email will be sent to this address upon registration." /><span ></span></td><td><div id="emailDiv"></div></td>
	</tr>
		<tr ><td  ><label for="username" title="Username:Please enter a valid username.  No spaces, at least 3 characters and contain 0-9,a-z,A-Z">Username:</label></td>

					<td   ><input type="text" name="username" id="username" value=""   size="25"   title="Username: Please enter a valid username.  No spaces, at least 3 characters and contain 0-9,a-z,A-Z" /><span ></span></td><td><div id="usernameDiv"></div></td>
	</tr>
		<tr >
			<td  ><label for="password" title="Password:Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs">Password:</label></td>
<td   ><input type="password" name="password" id="password" value=""   size="25" maxlength="50"  title="Password: Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs" /><span ></span></td><td><div id="passwordDiv"></div></td>
</tr>
<tr >
<td  ><label for="password__verify" title="Verify Password:Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs">Verify Password:</label></td>

					<td   ><input type="password" name="password__verify" id="password__verify" value=""  size="25" maxlength="50" title="Verify Password: Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs" /><span ></span></td><td><div id="vpassDiv"></div></td>
</tr>
<tr >
<td  ><label for="cb_nameoforganisation">Name of Organisation:</label></td>
<td   ><input type="text" name="cb_nameoforganisation" id="cb_nameoforganisation" value=""   size="25" /><span ></span></td><td><div id="orgDiv"></div></td>
</tr>
<tr >
<td  ><label for="cb_mainaddress">Main Address:</label></td>
<td  ><textarea name="cb_mainaddress" id="cb_mainaddress"   ></textarea><span  ></span></td><td><div id="addressDiv"></div></td>
</tr>
<tr >
<td  ><label for="cb_state">State:</label></td>
<td   ><select name="cb_state"  id="cb_state" onchange="calldistricts(this.value,1)">
                  <option value="Select">Select</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option><option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option value="Chandigarh">Chandigarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Lakshadweep">Lakshadweep</option><option value="National Capital Territory of Delhi">National Capital Territory of Delhi</option><option value="Puducherry">Puducherry</option>                  </select><span  ></span></td><td><div id="stateDiv"></div></td>
</tr>
<tr >
<tr >
<td  ><label for="cb_district">District:</label></td>
<td id="cbfv_89"> <div id="distDiv1"><select name="cb_district" id="cb_district">
                    <option value="Select">Select State</option>
                    </select><span  ></span></div></td><td><div id="distDiv"></div></td>
</tr>
<td  ><label for="cb_city">City:</label></td>

<td   ><input type="text" name="cb_city" id="cb_city" value=""   size="25" /><span  ></span></td><td><div id="cityDiv"></div></td>
</tr>

<tr >
<td  ><label for="cb_pincode">Pin Code:</label></td>
<td   ><input type="text" name="cb_pincode" id="cb_pincode" value=""   size="25" /><span  ></span></td><td><div id="pinDiv"></div></td>
</tr>

<tr >
<td  ><label for="cb_landlineno">Land Line No.:</label></td>
<td   ><input type="text" name="cb_landlineno" id="cb_landlineno" value=""  size="25"   /><span  ></span></td><td><div id="phoneDiv"></div></td>
</tr>
<tr  >
<td  ><label for="cb_contactperson1">Contact Person :</label></td>
<td   ><input type="text" name="cb_contactperson1" id="cb_contactperson1" value=""   size="25"   /><span  ></span></td><td><div id="person1Div"></div></td>
</tr>
<tr   >
<td  ><label for="cb_mobile1">Mobile:</label></td>
<td    ><input type="text" name="cb_mobile1" id="cb_mobile1" value=""  size="25"   /><span  ></span></td><td><div id="mobileDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_dateofbirth">Date of Birth:</label></td>
<td><select name="day" id="days">
            <?php 
			for($i=1;$i<=31;$i++)
			{
				echo "<option value=".$i.">".$i."</option>";
			}
		    ?></select>
            <select name="month" id="months">
             <?php 
			for($i=1;$i<=12;$i++)
			{
				echo "<option value=".$i.">".$i."</option>";
			}
	    	?></select>
             <select name="year" id="years">
             <?php 
			for($i=1950;$i<=2010;$i++)
			{
				echo "<option value=".$i.">".$i."</option>";
			}
		    ?></select><span  ></span></td><td><div id="dobDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_anniversary">Anniversary:</label></td>
<td   ><select name="day1" id="days">
       <option value="NA">NA</option>
            <?php 
			for($i=1;$i<=31;$i++)
			{
				echo "<option value=".$i.">".$i."</option>";
			}
		    ?></option></select>
            <select name="month1" id="months">
	    <option value="NA">NA</option>
	    <option value="Jan">Jan</option>
	    <option value="Feb">Feb</option>
	    <option value="Mar">Mar</option>
	    <option value="Apr">Apr</option>
	    <option value="May">May</option>
	    <option value="Jun">Jun</option>
	    <option value="Jul">Jul</option>
	    <option value="Aug">Aug</option>
	    <option value="Sep">Sep</option>
	    <option value="Oct">Oct</option>
	    <option value="Nov">Nov</option>
	    <option value="Dec">Dec</option>
	    </select>
            <span  ></span>
  <span  ></span>
  </div></td>
<td><div id="annivDiv"></div></td>
</tr><tr>
<td  ><label for="cb_shippingaddress1">Shipping Address :</label></td>
<td   ><textarea name="cb_shippingaddress1" id="cb_shippingaddress1"   ></textarea><span  ></td><td><div id="shipingaddressDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_tinno">TIN No.:</label></td>
<td   ><input type="text" name="cb_tinno" id="cb_tinno" value=""  size="25"   /><span  ></span></td><td><div id="tinnoDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_cstno">CST No.:</label></td>
<td ><input type="text" name="cb_cstno" id="cb_cstno" value=""  size="25"   /><span  ></span></td><td><div id="cstDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_panno">PAN No.:</label></td>
<td   ><input type="text" name="cb_panno" id="cb_panno" value=""  size="25"   /><span  ></span></td><td><div id="panDiv"></div></td>
</tr>
<tr >
<td  ><label for="cb_typeoforganisation">Type of Organisation:</label></td>
<td  >

<select name="cb_typeoforganisation" id="cb_typeoforganisation"   >

	<option value=""> </option>

	<option value="Proprietorship" id="cbf19">Proprietorship</option>

	<option value="Partnership" id="cbf20">Partnership</option>

	<option value="Pvt. Ltd." id="cbf21">Pvt. Ltd.</option>

</select>
<span  ></span></td><td><div id="typeoforgDiv"></div></td>
</tr>
<tr >
<td  ><label for="cb_noofdirectors">No. of Directors (If Pvt. Ltd.):</label></td>
<td  ><select name="cb_noofdirectors" id="cb_noofdirectors"   >
	<option value="0" id="cbf19">0</option>
	<option value="1" id="cbf19">1</option>

	<option value="2" id="cbf20">2</option>

	<option value="3" id="cbf21">3</option>
	
	<option value="4" id="cbf19">4</option>

	<option value="5" id="cbf20">6</option>

	<option value="7" id="cbf21">7</option>

</select><span  ></span></td><td><div id="noofdirDiv"></div></td>
</tr>
<tr >
<td  ><label for="cb_noofpartners">No. of Partners (If Partnership):</label></td>
<td   ><select name="cb_noofpartners" id="cb_noofpartners"   >
	<option value="0" >0</option>
	<option value="1" >1</option>

	<option value="2" >2</option>

	<option value="3" >3</option>
	
	<option value="4" >4</option>

	<option value="5" >6</option>

	<option value="7" >7</option>

</select><span  ></span></td><td><div id="noofparDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_bankname">Bank Name:</label></td>
<td   ><input type="text" name="cb_bankname" id="cb_bankname" value=""  size="25"   /><span  ></span></td><td><div id="bankDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_bankaddress">Bank Address:</label></td>
<td   ><textarea name="cb_bankaddress" id="cb_bankaddress"   ></textarea><span  ></span></td><td><div id="bankaddressDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_accountno">Account No.:</label></td>
<td   ><input type="text" name="cb_accountno" id="cb_accountno" value=""  size="25"   /><span  ></span></td><td><div id="accountnoDiv"></div></td>
</tr>
<tr   >
<td  ><label for="cb_ifscneftcode">IFSC / NEFT Code:</label></td>
<td><input type="text" name="cb_ifscneftcode" id="cb_ifscneftcode" value=""  size="25"   /><span  ></span></td><td><div id="neftDiv"></div></td>
</tr>    <tr>
<td colspan="2" >&nbsp;</td>
</tr>
<tr>
  <td colspan="3" align="right"><input name="submit" type="submit" value="Register"></td>
  </tr>
</table>
</form>


