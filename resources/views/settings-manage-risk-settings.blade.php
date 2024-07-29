@extends('app')
@section('content')
  <!--navbar-site-->

<!--navbar-site-->
<div class="navbar-all-site cairo-uniquifier">
  <div class="top-navbar ">
   <div class="container">
       <span class="inputicons"><i class="fa-solid fa-book"></i></span><input type="text" class="mt-2 mb-2" placeholder="Contact Us For Personalized Demo">
       <a href="settings.html" class="mt-4 mb-4"> <i class="fa-solid fa-house"></i><a href="settings.html"> My account</a></a>
       <a href="settings.html"><img src="img/person2.jpg" class="img-fluid" alt=""></a>
      <span class="mt-4 mb-3"><i class="fa-solid fa-power-off"></i><a href="#"> sign out</a></span>
   
  </div>
 </div>
<nav class="navbar navbar-expand-lg">
   <div class="container">
     <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt=""></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon">
       <span class="text-light"><i class="fa-solid fa-bars p-1"></i></span>
       </span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="globalView.html"><span><i class="fa-solid fa-eye"></i></span> global view</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="collection.html"><span><i class="fa-solid fa-clock"></i></span> collection</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="actionsToDo.html" >
            <span><i class="fa-solid fa-bolt "></i></span>risk
          </a>
        </li>
       
         <li class="nav-item">
           <a class="nav-link" href="allClients.html"><span><i class="fa-solid fa-globe"></i></span> clients</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="searchForAClient.html"><span><i class="fa-solid fa-magnifying-glass"></i></span> search</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" id="reportsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><span><i class="fa-solid fa-chart-simple"></i></span> reports</a>
           <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
            <li><a class="dropdown-item text-primary" href="reportsAgingBalance.html"><i class="fa-solid fa-chart-simple "></i> Aging balance</a></li>
            <li><a class="dropdown-item text-primary" href="reportsOverdueTrend.html"><i class="fa-solid fa-clock-rotate-left"></i> Overdue trend</a></li>
            <li><a class="dropdown-item text-primary" href="reportsDSO.html"><i class="fa-solid fa-chart-line"></i> DSO</a></li>
            <li><a class="dropdown-item text-primary" href="reportsItemsStatus.html"><i class="fa-solid fa-chart-pie"></i> Items status</a></li>
            <li><a class="dropdown-item text-primary" href="reportsDisputes.html"><i class="fa-solid fa-handshake-simple"></i> Disputes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="reportsSales.html"><i class="fa-solid fa-signal"></i> Sales</a></li>
            <li><a class="dropdown-item text-primary" href="reportsCashReciepts.html"><i class="fa-solid fa-money-bill-1-wave"></i> Cash receipts</a></li>
            <li><a class="dropdown-item text-primary" href="reportsCashForecast.html"><i class="fa-solid fa-wand-magic-sparkles"></i> Cash Forecast</a></li>
            <li><a class="dropdown-item text-primary" href="reportsPaymentSchedule.html"><i class="fa-solid fa-table-cells"></i> Payment Schedule</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="reportsRisk.html"><i class="fa-solid fa-bolt me-2"></i>Risk</a></li>
            <li><a class="dropdown-item text-primary" href="reportsPaymentProfile.html"><i class="fa-solid fa-flag me-2"></i>Payment profile</a></li>
          </ul>
         </li>
         <li class="nav-item dropdown active">
           <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fa-solid fa-gear"></i></span> setting
           </a>
           <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
            <li><a class="dropdown-item text-primary" href="settings-manage-users-account.html"><i class="fa-solid fa-users"></i> Manage users account</a></li>
            <li><a class="dropdown-item text-primary" href="settings-secure.html"><i class="fa-solid fa-lock"></i> Secure my account and user accounts</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="settings-import-export-data.html"><i class="fa-solid fa-rotate"></i> Import / Export your data</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-search.html"><i class="fa-solid fa-robot"></i> Manage search assign</a></li>
            <li><a class="dropdown-item text-primary" href="settings-create-client.html"><i class="fa-solid fa-plus"></i> Create a client</a></li>
            <li><a class="dropdown-item text-primary" href="settings-create-item.html"><i class="fa-solid fa-plus"></i> Create an item(invoice, credit note,...)</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-clients-group.html"><i class="fa-regular fa-folder-open"></i> Manage clients group</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-collection-scenario.html"><i class="fa-regular fa-clock"></i> Manage collection scenario</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-item-status.html"><i class="fa-regular fa-square-check"></i> Manage item status</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-payment-profile.html"><i class="fa-regular fa-flag"></i> Manage payment profiles</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-risk-settings.html"><i class="fa-solid fa-bolt"></i> Manage risk</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-validation.html"><i class="fa-solid fa-computer"></i>Manage credit limits validation</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="help.html"><span><i class="fa-solid fa-circle-info"></i></span> helps</a>
         </li>
         <div class="icons-nav">
           <a href="insights.html"><i class="fa-solid fa-book"></i></a>
           <a class="position-relative" href="#" id="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
           <div class="search-container px-4 py-2 rounded" id="search-container">
            <p>Quick search :</p>
            <div class="input-group w-100 ">
                <input type="text" class="search-input form-control" placeholder="Search for a client / Search for an item (invoice, credit note, ...)...">
                <span class="input-group-text bg-primary"><a href="#"><i class="fa-solid fa-search text-white"></i></a></span>
              </div>
              <div class="d-flex "><input type="checkbox" class="mb-3 me-1 chec bg-body-tertiary">
                <p class="name-d">Include cleared items</p></div>
          </div>
         </div>
         </ul>
     </div>
   </div>
 </nav>
</div>
<!--navbar-site-->
  <section class="m-groups mt-3">
    <div class="container-fluid">
      <div class="t-manage text-center text-capitalize">
        <h4 class="">Manage Risk</h4>
      </div><!--t-manage-->
      <div class="s-c-notation d-flex ">
        <a href="#" class="border-primary border text-decoration-none m-3" style="border-width:2px !important; padding: 5px 10px;"><i class="fa-solid fa-gear"></i>Setting</a>
        <a href="settings-manage-risk.html" class="text-dark text-decoration-none  m-3" style="padding: 5px 10px;">Manage Credit Notation</a>
      </div><!--s-c-notation-->


    </div><!--container-->
  </section><!--manage-i-info-->
  <section class="pay-info mt-3 mb-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 labl">
          <label for="inputname1">Credit insurance :</label>
        </div><!--left-->
        <div class="col-md-7 inpoot my-2">
          <input type="text" class="form-control" id="inputname1" placeholder="World Insurer">
        </div><!--right-->

        <div class="col-md-5 labl my-2">
          <label for="inputname2">Credit limits validity duration :</label>
        </div><!--left-->
        <div class="col-md-7 inpoot my-2">
          <div class="input-group">
            <select class="form-select" id="inputname2">
              <option value="" selected disabled>1</option>
              <option value="5">5</option>
              <option value="10" selected="">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="25">25</option>
              <option value="30">30</option>
              <option value="35">35</option>
              <option value="40">40</option>
              <option value="45">45</option>
              <option value="50">50</option>
              <option value="55">55</option>
              <option value="60">60</option>
              <option value="65">65</option>
              <option value="70">70</option>
              <option value="75">75</option>
              <option value="80">80</option>
              <option value="85">85</option>
              <option value="90">90</option>
              <option value="95">95</option>
              <option value="100">100</option>
              <option value="105">105</option>
              <option value="110">110</option>
              <option value="115">115</option>
              <option value="120">120</option>
              <option value="125">125</option>
              <option value="130">130</option>
              <option value="135">135</option>
              <option value="140">140</option>
              <option value="145">145</option>
              <option value="150">150</option>
              <option value="155">155</option>
              <option value="160">160</option>
              <option value="165">165</option>
              <option value="170">170</option>
              <option value="175">175</option>
              <option value="180">180</option>
              <option value="185">185</option>
              <option value="190">190</option>
              <option value="195">195</option>
              <option value="200">200</option>
              <option value="205">205</option>
              <option value="210">210</option>
              <option value="215">215</option>
              <option value="220">220</option>
              <option value="225">225</option>
              <option value="230">230</option>
              <option value="235">235</option>
              <option value="240">240</option>
              <option value="245">245</option>
              <option value="250">250</option>
              <option value="255">255</option>
              <option value="260">260</option>
              <option value="265">265</option>
              <option value="270">270</option>
              <option value="275">275</option>
              <option value="280">280</option>
              <option value="285">285</option>
              <option value="290">290</option>
              <option value="295">295</option>
              <option value="300">300</option>
              <option value="305">305</option>
              <option value="310">310</option>
              <option value="315">315</option>
              <option value="320">320</option>
              <option value="325">325</option>
              <option value="330">330</option>
              <option value="335">335</option>
              <option value="340">340</option>
              <option value="345">345</option>
              <option value="350">350</option>
              <option value="355">355</option>
              <option value="360">360</option>
              <option value="365">365</option>
              <option value="370">370</option>
              <option value="375">375</option>
              <option value="380">380</option>
              <option value="385">385</option>
              <option value="390">390</option>
              <option value="395">395</option>
              <option value="400">400</option>
              <option value="405">405</option>
              <option value="410">410</option>
              <option value="415">415</option>
              <option value="420">420</option>
              <option value="425">425</option>
              <option value="430">430</option>
              <option value="435">435</option>
              <option value="440">440</option>
              <option value="445">445</option>
              <option value="450">450</option>
              <option value="455">455</option>
              <option value="460">460</option>
              <option value="465">465</option>
              <option value="470">470</option>
              <option value="475">475</option>
              <option value="480">480</option>
              <option value="485">485</option>
              <option value="490">490</option>
              <option value="495">495</option>
              <option value="500">500</option>
              <option value="505">505</option>
              <option value="510">510</option>
              <option value="515">515</option>
              <option value="520">520</option>
              <option value="525">525</option>
              <option value="530">530</option>
              <option value="535">535</option>
              <option value="540">540</option>
              <option value="545">545</option>
              <option value="550">550</option>
              <option value="555">555</option>
              <option value="560">560</option>
              <option value="565">565</option>
              <option value="570">570</option>
              <option value="575">575</option>
              <option value="580">580</option>
              <option value="585">585</option>
              <option value="590">590</option>
              <option value="595">595</option>
              <option value="600">600</option>
              <option value="605">605</option>
              <option value="610">610</option>
              <option value="615">615</option>
              <option value="620">620</option>
              <option value="625">625</option>
              <option value="630">630</option>
              <option value="635">635</option>
              <option value="640">640</option>
              <option value="645">645</option>
              <option value="650">650</option>
              <option value="655">655</option>
              <option value="660">660</option>
              <option value="665">665</option>
              <option value="670">670</option>
              <option value="675">675</option>
              <option value="680">680</option>
              <option value="685">685</option>
              <option value="690">690</option>
              <option value="695">695</option>
              <option value="700">700</option>
              <option value="705">705</option>
              <option value="710">710</option>
              <option value="715">715</option>
              <option value="720">720</option>
              <option value="725">725</option>
              <option value="730">730</option>

            </select>
            <span class="input-group-text">days</span>
          </div>
        </div><!--right-->

        <div class="col-md-5 labl my-2">
          <label for="inputname3">Alert when the total receivable reaches :</label>
        </div><!--left-->
        <div class="col-md-7 inpoot my-2">
          <div class="input-group">
            <select class="form-select" id="inputname3">
              <option value="" selected disabled>100</option>
              <option value=""></option>
              <option value="50">50</option>
              <option value="100" selected="selected">100</option>
              <option value="150">150</option>
              <option value="200">200</option>
              <option value="">--</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              <option value="32">32</option>
              <option value="33">33</option>
              <option value="34">34</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
              <option value="45">45</option>
              <option value="46">46</option>
              <option value="47">47</option>
              <option value="48">48</option>
              <option value="49">49</option>
              <option value="50">50</option>
              <option value="51">51</option>
              <option value="52">52</option>
              <option value="53">53</option>
              <option value="54">54</option>
              <option value="55">55</option>
              <option value="56">56</option>
              <option value="57">57</option>
              <option value="58">58</option>
              <option value="59">59</option>
              <option value="60">60</option>
              <option value="61">61</option>
              <option value="62">62</option>
              <option value="63">63</option>
              <option value="64">64</option>
              <option value="65">65</option>
              <option value="66">66</option>
              <option value="67">67</option>
              <option value="68">68</option>
              <option value="69">69</option>
              <option value="70">70</option>
              <option value="71">71</option>
              <option value="72">72</option>
              <option value="73">73</option>
              <option value="74">74</option>
              <option value="75">75</option>
              <option value="76">76</option>
              <option value="77">77</option>
              <option value="78">78</option>
              <option value="79">79</option>
              <option value="80">80</option>
              <option value="81">81</option>
              <option value="82">82</option>
              <option value="83">83</option>
              <option value="84">84</option>
              <option value="85">85</option>
              <option value="86">86</option>
              <option value="87">87</option>
              <option value="88">88</option>
              <option value="89">89</option>
              <option value="90">90</option>
              <option value="91">91</option>
              <option value="92">92</option>
              <option value="93">93</option>
              <option value="94">94</option>
              <option value="95">95</option>
              <option value="96">96</option>
              <option value="97">97</option>
              <option value="98">98</option>
              <option value="99">99</option>
              <option value="100">100</option>
              <option value="101">101</option>
              <option value="102">102</option>
              <option value="103">103</option>
              <option value="104">104</option>
              <option value="105">105</option>
              <option value="106">106</option>
              <option value="107">107</option>
              <option value="108">108</option>
              <option value="109">109</option>
              <option value="110">110</option>
              <option value="111">111</option>
              <option value="112">112</option>
              <option value="113">113</option>
              <option value="114">114</option>
              <option value="115">115</option>
              <option value="116">116</option>
              <option value="117">117</option>
              <option value="118">118</option>
              <option value="119">119</option>
              <option value="120">120</option>
              <option value="121">121</option>
              <option value="122">122</option>
              <option value="123">123</option>
              <option value="124">124</option>
              <option value="125">125</option>
              <option value="126">126</option>
              <option value="127">127</option>
              <option value="128">128</option>
              <option value="129">129</option>
              <option value="130">130</option>
              <option value="131">131</option>
              <option value="132">132</option>
              <option value="133">133</option>
              <option value="134">134</option>
              <option value="135">135</option>
              <option value="136">136</option>
              <option value="137">137</option>
              <option value="138">138</option>
              <option value="139">139</option>
              <option value="140">140</option>
              <option value="141">141</option>
              <option value="142">142</option>
              <option value="143">143</option>
              <option value="144">144</option>
              <option value="145">145</option>
              <option value="146">146</option>
              <option value="147">147</option>
              <option value="148">148</option>
              <option value="149">149</option>
              <option value="150">150</option>
              <option value="151">151</option>
              <option value="152">152</option>
              <option value="153">153</option>
              <option value="154">154</option>
              <option value="155">155</option>
              <option value="156">156</option>
              <option value="157">157</option>
              <option value="158">158</option>
              <option value="159">159</option>
              <option value="160">160</option>
              <option value="161">161</option>
              <option value="162">162</option>
              <option value="163">163</option>
              <option value="164">164</option>
              <option value="165">165</option>
              <option value="166">166</option>
              <option value="167">167</option>
              <option value="168">168</option>
              <option value="169">169</option>
              <option value="170">170</option>
              <option value="171">171</option>
              <option value="172">172</option>
              <option value="173">173</option>
              <option value="174">174</option>
              <option value="175">175</option>
              <option value="176">176</option>
              <option value="177">177</option>
              <option value="178">178</option>
              <option value="179">179</option>
              <option value="180">180</option>
              <option value="181">181</option>
              <option value="182">182</option>
              <option value="183">183</option>
              <option value="184">184</option>
              <option value="185">185</option>
              <option value="186">186</option>
              <option value="187">187</option>
              <option value="188">188</option>
              <option value="189">189</option>
              <option value="190">190</option>
              <option value="191">191</option>
              <option value="192">192</option>
              <option value="193">193</option>
              <option value="194">194</option>
              <option value="195">195</option>
              <option value="196">196</option>
              <option value="197">197</option>
              <option value="198">198</option>
              <option value="199">199</option>
              <option value="200">200</option>
            </select>

            <span class="input-group-text">% of the credit limit</span>
          </div>
        </div><!--right-->

        <div class="col-md-5 labl my-2">
          <label for="inputname4">Grace period :</label>
        </div><!--left-->
        <div class="col-md-7 inpoot my-2">
          <div class="input-group">
            <select class="form-select" id="inputname4">
              <option value="5">5</option>
              <option value="10" selected="">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="25">25</option>
              <option value="30">30</option>
              <option value="35">35</option>
              <option value="40">40</option>
              <option value="45">45</option>
              <option value="50">50</option>
              <option value="55">55</option>
              <option value="60">60</option>
              <option value="65">65</option>
              <option value="70">70</option>
              <option value="75">75</option>
              <option value="80">80</option>
              <option value="85">85</option>
              <option value="90">90</option>
              <option value="95">95</option>
              <option value="100">100</option>
              <option value="105">105</option>
              <option value="110">110</option>
              <option value="115">115</option>
              <option value="120">120</option>
              <option value="125">125</option>
              <option value="130">130</option>
              <option value="135">135</option>
              <option value="140">140</option>
              <option value="145">145</option>
              <option value="150">150</option>
              <option value="155">155</option>
              <option value="160">160</option>
              <option value="165">165</option>
              <option value="170">170</option>
              <option value="175">175</option>
              <option value="180">180</option>
              <option value="185">185</option>
              <option value="190">190</option>
              <option value="195">195</option>
              <option value="200">200</option>
              <option value="205">205</option>
              <option value="210">210</option>
              <option value="215">215</option>
              <option value="220">220</option>
              <option value="225">225</option>
              <option value="230">230</option>
              <option value="235">235</option>
              <option value="240">240</option>
              <option value="245">245</option>
              <option value="250">250</option>
              <option value="255">255</option>
              <option value="260">260</option>
              <option value="265">265</option>
              <option value="270">270</option>
              <option value="275">275</option>
              <option value="280">280</option>
              <option value="285">285</option>
              <option value="290">290</option>
              <option value="295">295</option>
              <option value="300">300</option>
              <option value="305">305</option>
              <option value="310">310</option>
              <option value="315">315</option>
              <option value="320">320</option>
              <option value="325">325</option>
              <option value="330">330</option>
              <option value="335">335</option>
              <option value="340">340</option>
              <option value="345">345</option>
              <option value="350">350</option>
              <option value="355">355</option>
              <option value="360">360</option>
              <option value="365">365</option>
              <option value="370">370</option>
              <option value="375">375</option>
              <option value="380">380</option>
              <option value="385">385</option>
              <option value="390">390</option>
              <option value="395">395</option>
              <option value="400">400</option>
              <option value="405">405</option>
              <option value="410">410</option>
              <option value="415">415</option>
              <option value="420">420</option>
              <option value="425">425</option>
              <option value="430">430</option>
              <option value="435">435</option>
              <option value="440">440</option>
              <option value="445">445</option>
              <option value="450">450</option>
              <option value="455">455</option>
              <option value="460">460</option>
              <option value="465">465</option>
              <option value="470">470</option>
              <option value="475">475</option>
              <option value="480">480</option>
              <option value="485">485</option>
              <option value="490">490</option>
              <option value="495">495</option>
              <option value="500">500</option>
              <option value="505">505</option>
              <option value="510">510</option>
              <option value="515">515</option>
              <option value="520">520</option>
              <option value="525">525</option>
              <option value="530">530</option>
              <option value="535">535</option>
              <option value="540">540</option>
              <option value="545">545</option>
              <option value="550">550</option>
              <option value="555">555</option>
              <option value="560">560</option>
              <option value="565">565</option>
              <option value="570">570</option>
              <option value="575">575</option>
              <option value="580">580</option>
              <option value="585">585</option>
              <option value="590">590</option>
              <option value="595">595</option>
              <option value="600">600</option>
              <option value="605">605</option>
              <option value="610">610</option>
              <option value="615">615</option>
              <option value="620">620</option>
              <option value="625">625</option>
              <option value="630">630</option>
              <option value="635">635</option>
              <option value="640">640</option>
              <option value="645">645</option>
              <option value="650">650</option>
              <option value="655">655</option>
              <option value="660">660</option>
              <option value="665">665</option>
              <option value="670">670</option>
              <option value="675">675</option>
              <option value="680">680</option>
              <option value="685">685</option>
              <option value="690">690</option>
              <option value="695">695</option>
              <option value="700">700</option>
              <option value="705">705</option>
              <option value="710">710</option>
              <option value="715">715</option>
              <option value="720">720</option>
              <option value="725">725</option>
              <option value="730">730</option>

            </select>
            <span class="input-group-text">days</span>
          </div>
        </div><!--right-->

        <div class="col-md-5 labl my-2">
          <label for="inputname5">Time limit for declaring a claim to the insurer :</label>
        </div><!--left-->
        <div class="col-md-7 inpoot my-2">
          <div class="input-group">
            <input type="text" class="form-control remo" id="inputname5" placeholder="World Insurer">
            <span class="input-group-text">
              <select class="form-select px-2 mx-3" id="inputname">
                <option value="" selected disabled></option>
                <option value="5">5</option>

                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <option value="60">60</option>
                <option value="65">65</option>
                <option value="70">70</option>
                <option value="75">75</option>
                <option value="80">80</option>
                <option value="85">85</option>
                <option value="90">90</option>
                <option value="95">95</option>
                <option value="100">100</option>
                <option value="105">105</option>
                <option value="110">110</option>
                <option value="115">115</option>
                <option value="120">120</option>
                <option value="125">125</option>
                <option value="130">130</option>
                <option value="135">135</option>
                <option value="140">140</option>
                <option value="145">145</option>
                <option value="150">150</option>
                <option value="155">155</option>
                <option value="160">160</option>
                <option value="165">165</option>
                <option value="170">170</option>
                <option value="175">175</option>
                <option value="180">180</option>
                <option value="185">185</option>
                <option value="190">190</option>
                <option value="195">195</option>
                <option value="200">200</option>
                <option value="205">205</option>
                <option value="210">210</option>
                <option value="215">215</option>
                <option value="220">220</option>
                <option value="225">225</option>
                <option value="230">230</option>
                <option value="235">235</option>
                <option value="240">240</option>
                <option value="245">245</option>
                <option value="250">250</option>
                <option value="255">255</option>
                <option value="260">260</option>
                <option value="265">265</option>
                <option value="270">270</option>
                <option value="275">275</option>
                <option value="280">280</option>
                <option value="285">285</option>
                <option value="290">290</option>
                <option value="295">295</option>
                <option value="300">300</option>
                <option value="305">305</option>
                <option value="310">310</option>
                <option value="315">315</option>
                <option value="320">320</option>
                <option value="325">325</option>
                <option value="330">330</option>
                <option value="335">335</option>
                <option value="340">340</option>
                <option value="345">345</option>
                <option value="350">350</option>
                <option value="355">355</option>
                <option value="360">360</option>
                <option value="365">365</option>
                <option value="370">370</option>
                <option value="375">375</option>
                <option value="380">380</option>
                <option value="385">385</option>
                <option value="390">390</option>
                <option value="395">395</option>
                <option value="400">400</option>
                <option value="405">405</option>
                <option value="410">410</option>
                <option value="415">415</option>
                <option value="420">420</option>
                <option value="425">425</option>
                <option value="430">430</option>
                <option value="435">435</option>
                <option value="440">440</option>
                <option value="445">445</option>
                <option value="450">450</option>
                <option value="455">455</option>
                <option value="460">460</option>
                <option value="465">465</option>
                <option value="470">470</option>
                <option value="475">475</option>
                <option value="480">480</option>
                <option value="485">485</option>
                <option value="490">490</option>
                <option value="495">495</option>
                <option value="500">500</option>
                <option value="505">505</option>
                <option value="510">510</option>
                <option value="515">515</option>
                <option value="520">520</option>
                <option value="525">525</option>
                <option value="530">530</option>
                <option value="535">535</option>
                <option value="540">540</option>
                <option value="545">545</option>
                <option value="550">550</option>
                <option value="555">555</option>
                <option value="560">560</option>
                <option value="565">565</option>
                <option value="570">570</option>
                <option value="575">575</option>
                <option value="580">580</option>
                <option value="585">585</option>
                <option value="590">590</option>
                <option value="595">595</option>
                <option value="600">600</option>
                <option value="605">605</option>
                <option value="610">610</option>
                <option value="615">615</option>
                <option value="620">620</option>
                <option value="625">625</option>
                <option value="630">630</option>
                <option value="635">635</option>
                <option value="640">640</option>
                <option value="645">645</option>
                <option value="650">650</option>
                <option value="655">655</option>
                <option value="660">660</option>
                <option value="665">665</option>
                <option value="670">670</option>
                <option value="675">675</option>
                <option value="680">680</option>
                <option value="685">685</option>
                <option value="690">690</option>
                <option value="695">695</option>
                <option value="700">700</option>
                <option value="705">705</option>
                <option value="710">710</option>
                <option value="715">715</option>
                <option value="720">720</option>
                <option value="725">725</option>
                <option value="730">730</option>

              </select>of the invoice
            </span>
          </div>
        </div><!--right-->
      </div><!--row-->
    </div><!--container-->
    <div class="container text-center my-5 ">
      <button class="btn btn-primary my-1 btn-add-i"><i class="fa-solid fa-check "></i>  Submit</button>
    </div>
  </section><!--pay-info-->


  @endsection