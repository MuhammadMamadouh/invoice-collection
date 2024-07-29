@extends('layouts.app')
@section('content')
    <div class="overlay d-none" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;"></div>
    <div class="position-fixed add-action-div d-none w-75" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
        <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
          <span class="btn btn-secondary position-absolute" onclick="hideAddActionDiv()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
          <div class="my-2">
            <form class="d-flex align-items-center">
              <div class="col-4 ">
                <label for="inputname18"> Action name:</label>
              </div>
              <div class="col-8">
                <div class="input-group">    
                  <input type="text" class="form-control " id="inputname18" placeholder="Name">
                </div>
              </div>
            </form>
          </div><!--24-->      
          <div class="my-2">
            <form class="d-flex align-items-center">
              <div class="col-4 ">
                <label for="inputname20">No. Of Days Follow-Up Action <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;width: 18px;height: 22px;"></i></a>:</label>
              </div>
              <div class="col-8">
                <select id="inputname20" class="form-select">
                  <option value="1">+ 1 days</option>
                  <option value="2">+ 2 days</option>
                  <option value="3">+ 3 days</option>
                  <option value="4">+ 4 days</option>
                  <option value="5">+ 5 days</option>
                  <option value="6">+ 6 days</option>
                  <option value="7">+ 7 days</option>
                  <option value="8">+ 8 days</option>
                  <option value="9">+ 9 days</option>
                  <option value="10">+ 10 days</option>
                  <option value="11">+ 11 days</option>
                  <option value="12">+ 12 days</option>
                  <option value="13">+ 13 days</option>
                  <option value="14">+ 14 days</option>
                  <option value="15">+ 15 days</option>
                  <option value="16">+ 16 days</option>
                  <option value="17">+ 17 days</option>
                  <option value="18">+ 18 days</option>
                  <option value="19">+ 19 days</option>
                  <option value="20">+ 20 days</option>
                  <option value="21">+ 21 days</option>
                  <option value="22">+ 22 days</option>
                  <option value="23">+ 23 days</option>
                  <option value="24">+ 24 days</option>
                  <option value="25">+ 25 days</option>
                  <option value="26">+ 26 days</option>
                  <option value="27">+ 27 days</option>
                  <option value="28">+ 28 days</option>
                  <option value="29">+ 29 days</option>
                  <option value="30">+ 30 days</option>
                  <option value="31">+ 31 days</option>
                  <option value="32">+ 32 days</option>
                  <option value="33">+ 33 days</option>
                  <option value="34">+ 34 days</option>
                  <option value="35">+ 35 days</option>
                  <option value="36">+ 36 days</option>
                  <option value="37">+ 37 days</option>
                  <option value="38">+ 38 days</option>
                  <option value="39">+ 39 days</option>
                  <option value="40">+ 40 days</option>
                  <option value="41">+ 41 days</option>
                  <option value="42">+ 42 days</option>
                  <option value="43">+ 43 days</option>
                  <option value="44">+ 44 days</option>
                  <option value="45">+ 45 days</option>
                  <option value="46">+ 46 days</option>
                  <option value="47">+ 47 days</option>
                  <option value="48">+ 48 days</option>
                  <option value="49">+ 49 days</option>
                  <option value="50">+ 50 days</option>
                  <option value="51">+ 51 days</option>
                  <option value="52">+ 52 days</option>
                  <option value="53">+ 53 days</option>
                  <option value="54">+ 54 days</option>
                  <option value="55">+ 55 days</option>
                  <option value="56">+ 56 days</option>
                  <option value="57">+ 57 days</option>
                  <option value="58">+ 58 days</option>
                  <option value="59">+ 59 days</option>
                  <option value="60">+ 60 days</option>
                  <option value="61">+ 61 days</option>
                  <option value="62">+ 62 days</option>
                  <option value="63">+ 63 days</option>
                  <option value="64">+ 64 days</option>
                  <option value="65">+ 65 days</option>
                  <option value="66">+ 66 days</option>
                  <option value="67">+ 67 days</option>
                  <option value="68">+ 68 days</option>
                  <option value="69">+ 69 days</option>
                  <option value="70">+ 70 days</option>
                  <option value="71">+ 71 days</option>
                  <option value="72">+ 72 days</option>
                  <option value="73">+ 73 days</option>
                  <option value="74">+ 74 days</option>
                  <option value="75">+ 75 days</option>
                  <option value="76">+ 76 days</option>
                  <option value="77">+ 77 days</option>
                  <option value="78">+ 78 days</option>
                  <option value="79">+ 79 days</option>
                  <option value="80">+ 80 days</option>
                  <option value="81">+ 81 days</option>
                  <option value="82">+ 82 days</option>
                  <option value="83">+ 83 days</option>
                  <option value="84">+ 84 days</option>
                  <option value="85">+ 85 days</option>
                  <option value="86">+ 86 days</option>
                  <option value="87">+ 87 days</option>
                  <option value="88">+ 88 days</option>
                  <option value="89">+ 89 days</option>
                  <option value="90">+ 90 days</option>
                  <option value="91">+ 91 days</option>
                  <option value="92">+ 92 days</option>
                  <option value="93">+ 93 days</option>
                  <option value="94">+ 94 days</option>
                  <option value="95">+ 95 days</option>
                  <option value="96">+ 96 days</option>
                  <option value="97">+ 97 days</option>
                  <option value="98">+ 98 days</option>
                  <option value="99">+ 99 days</option>
                  <option value="100">+ 100 days</option>
                  <option value="101">+ 101 days</option>
                  <option value="102">+ 102 days</option>
                  <option value="103">+ 103 days</option>
                  <option value="104">+ 104 days</option>
                  <option value="105">+ 105 days</option>
                  <option value="106">+ 106 days</option>
                  <option value="107">+ 107 days</option>
                  <option value="108">+ 108 days</option>
                  <option value="109">+ 109 days</option>
                  <option value="110">+ 110 days</option>
                  <option value="111">+ 111 days</option>
                  <option value="112">+ 112 days</option>
                  <option value="113">+ 113 days</option>
                  <option value="114">+ 114 days</option>
                  <option value="115">+ 115 days</option>
                  <option value="116">+ 116 days</option>
                  <option value="117">+ 117 days</option>
                  <option value="118">+ 118 days</option>
                  <option value="119">+ 119 days</option>
                  <option value="120">+ 120 days</option>
                  <option value="121">+ 121 days</option>
                  <option value="122">+ 122 days</option>
                  <option value="123">+ 123 days</option>
                  <option value="124">+ 124 days</option>
                  <option value="125">+ 125 days</option>
                  <option value="126">+ 126 days</option>
                  <option value="127">+ 127 days</option>
                  <option value="128">+ 128 days</option>
                  <option value="129">+ 129 days</option>
                  <option value="130">+ 130 days</option>
                  <option value="131">+ 131 days</option>
                  <option value="132">+ 132 days</option>
                  <option value="133">+ 133 days</option>
                  <option value="134">+ 134 days</option>
                  <option value="135">+ 135 days</option>
                  <option value="136">+ 136 days</option>
                  <option value="137">+ 137 days</option>
                  <option value="138">+ 138 days</option>
                  <option value="139">+ 139 days</option>
                  <option value="140">+ 140 days</option>
                  <option value="141">+ 141 days</option>
                  <option value="142">+ 142 days</option>
                  <option value="143">+ 143 days</option>
                  <option value="144">+ 144 days</option>
                  <option value="145">+ 145 days</option>
                  <option value="146">+ 146 days</option>
                  <option value="147">+ 147 days</option>
                  <option value="148">+ 148 days</option>
                  <option value="149">+ 149 days</option>
                  <option value="150">+ 150 days</option>
                  <option value="151">+ 151 days</option>
                  <option value="152">+ 152 days</option>
                  <option value="153">+ 153 days</option>
                  <option value="154">+ 154 days</option>
                  <option value="155">+ 155 days</option>
                  <option value="156">+ 156 days</option>
                  <option value="157">+ 157 days</option>
                  <option value="158">+ 158 days</option>
                  <option value="159">+ 159 days</option>
                  <option value="160">+ 160 days</option>
                  <option value="161">+ 161 days</option>
                  <option value="162">+ 162 days</option>
                  <option value="163">+ 163 days</option>
                  <option value="164">+ 164 days</option>
                  <option value="165">+ 165 days</option>
                  <option value="166">+ 166 days</option>
                  <option value="167">+ 167 days</option>
                  <option value="168">+ 168 days</option>
                  <option value="169">+ 169 days</option>
                  <option value="170">+ 170 days</option>
                  <option value="171">+ 171 days</option>
                  <option value="172">+ 172 days</option>
                  <option value="173">+ 173 days</option>
                  <option value="174">+ 174 days</option>
                  <option value="175">+ 175 days</option>
                  <option value="176">+ 176 days</option>
                  <option value="177">+ 177 days</option>
                  <option value="178">+ 178 days</option>
                  <option value="179">+ 179 days</option>
                  <option value="180">+ 180 days</option>
                  <option value="181">+ 181 days</option>
                  <option value="182">+ 182 days</option>
                  <option value="183">+ 183 days</option>
                  <option value="184">+ 184 days</option>
                  <option value="185">+ 185 days</option>
                  <option value="186">+ 186 days</option>
                  <option value="187">+ 187 days</option>
                  <option value="188">+ 188 days</option>
                  <option value="189">+ 189 days</option>
                  <option value="190">+ 190 days</option>
                  <option value="191">+ 191 days</option>
                  <option value="192">+ 192 days</option>
                  <option value="193">+ 193 days</option>
                  <option value="194">+ 194 days</option>
                  <option value="195">+ 195 days</option>
                  <option value="196">+ 196 days</option>
                  <option value="197">+ 197 days</option>
                  <option value="198">+ 198 days</option>
                  <option value="199">+ 199 days</option>
                  <option value="200">+ 200 days</option>
                  <option value="201">+ 201 days</option>
                  <option value="202">+ 202 days</option>
                  <option value="203">+ 203 days</option>
                  <option value="204">+ 204 days</option>
                  <option value="205">+ 205 days</option>
                  <option value="206">+ 206 days</option>
                  <option value="207">+ 207 days</option>
                  <option value="208">+ 208 days</option>
                  <option value="209">+ 209 days</option>
                  <option value="210">+ 210 days</option>
                  <option value="211">+ 211 days</option>
                  <option value="212">+ 212 days</option>
                  <option value="213">+ 213 days</option>
                  <option value="214">+ 214 days</option>
                  <option value="215">+ 215 days</option>
                  <option value="216">+ 216 days</option>
                  <option value="217">+ 217 days</option>
                  <option value="218">+ 218 days</option>
                  <option value="219">+ 219 days</option>
                  <option value="220">+ 220 days</option>
                  <option value="221">+ 221 days</option>
                  <option value="222">+ 222 days</option>
                  <option value="223">+ 223 days</option>
                  <option value="224">+ 224 days</option>
                  <option value="225">+ 225 days</option>
                  <option value="226">+ 226 days</option>
                  <option value="227">+ 227 days</option>
                  <option value="228">+ 228 days</option>
                  <option value="229">+ 229 days</option>
                  <option value="230">+ 230 days</option>
                  <option value="231">+ 231 days</option>
                  <option value="232">+ 232 days</option>
                  <option value="233">+ 233 days</option>
                  <option value="234">+ 234 days</option>
                  <option value="235">+ 235 days</option>
                  <option value="236">+ 236 days</option>
                  <option value="237">+ 237 days</option>
                  <option value="238">+ 238 days</option>
                  <option value="239">+ 239 days</option>
                  <option value="240">+ 240 days</option>
                  <option value="241">+ 241 days</option>
                  <option value="242">+ 242 days</option>
                  <option value="243">+ 243 days</option>
                  <option value="244">+ 244 days</option>
                  <option value="245">+ 245 days</option>
                  <option value="246">+ 246 days</option>
                  <option value="247">+ 247 days</option>
                  <option value="248">+ 248 days</option>
                  <option value="249">+ 249 days</option>
                  <option value="250">+ 250 days</option>
                  <option value="251">+ 251 days</option>
                  <option value="252">+ 252 days</option>
                  <option value="253">+ 253 days</option>
                  <option value="254">+ 254 days</option>
                  <option value="255">+ 255 days</option>
                  <option value="256">+ 256 days</option>
                  <option value="257">+ 257 days</option>
                  <option value="258">+ 258 days</option>
                  <option value="259">+ 259 days</option>
                  <option value="260">+ 260 days</option>
                  <option value="261">+ 261 days</option>
                  <option value="262">+ 262 days</option>
                  <option value="263">+ 263 days</option>
                  <option value="264">+ 264 days</option>
                  <option value="265">+ 265 days</option>
                  <option value="266">+ 266 days</option>
                  <option value="267">+ 267 days</option>
                  <option value="268">+ 268 days</option>
                  <option value="269">+ 269 days</option>
                  <option value="270">+ 270 days</option>
                  <option value="271">+ 271 days</option>
                  <option value="272">+ 272 days</option>
                  <option value="273">+ 273 days</option>
                  <option value="274">+ 274 days</option>
                  <option value="275">+ 275 days</option>
                  <option value="276">+ 276 days</option>
                  <option value="277">+ 277 days</option>
                  <option value="278">+ 278 days</option>
                  <option value="279">+ 279 days</option>
                  <option value="280">+ 280 days</option>
                  <option value="281">+ 281 days</option>
                  <option value="282">+ 282 days</option>
                  <option value="283">+ 283 days</option>
                  <option value="284">+ 284 days</option>
                  <option value="285">+ 285 days</option>
                  <option value="286">+ 286 days</option>
                  <option value="287">+ 287 days</option>
                  <option value="288">+ 288 days</option>
                  <option value="289">+ 289 days</option>
                  <option value="290">+ 290 days</option>
                  <option value="291">+ 291 days</option>
                  <option value="292">+ 292 days</option>
                  <option value="293">+ 293 days</option>
                  <option value="294">+ 294 days</option>
                  <option value="295">+ 295 days</option>
                  <option value="296">+ 296 days</option>
                  <option value="297">+ 297 days</option>
                  <option value="298">+ 298 days</option>
                  <option value="299">+ 299 days</option>
                  <option value="300">+ 300 days</option>
                  <option value="301">+ 301 days</option>
                  <option value="302">+ 302 days</option>
                  <option value="303">+ 303 days</option>
                  <option value="304">+ 304 days</option>
                  <option value="305">+ 305 days</option>
                  <option value="306">+ 306 days</option>
                  <option value="307">+ 307 days</option>
                  <option value="308">+ 308 days</option>
                  <option value="309">+ 309 days</option>
                  <option value="310">+ 310 days</option>
                  <option value="311">+ 311 days</option>
                  <option value="312">+ 312 days</option>
                  <option value="313">+ 313 days</option>
                  <option value="314">+ 314 days</option>
                  <option value="315">+ 315 days</option>
                  <option value="316">+ 316 days</option>
                  <option value="317">+ 317 days</option>
                  <option value="318">+ 318 days</option>
                  <option value="319">+ 319 days</option>
                  <option value="320">+ 320 days</option>
                  <option value="321">+ 321 days</option>
                  <option value="322">+ 322 days</option>
                  <option value="323">+ 323 days</option>
                  <option value="324">+ 324 days</option>
                  <option value="325">+ 325 days</option>
                  <option value="326">+ 326 days</option>
                  <option value="327">+ 327 days</option>
                  <option value="328">+ 328 days</option>
                  <option value="329">+ 329 days</option>
                  <option value="330">+ 330 days</option>
                  <option value="331">+ 331 days</option>
                  <option value="332">+ 332 days</option>
                  <option value="333">+ 333 days</option>
                  <option value="334">+ 334 days</option>
                  <option value="335">+ 335 days</option>
                  <option value="336">+ 336 days</option>
                  <option value="337">+ 337 days</option>
                  <option value="338">+ 338 days</option>
                  <option value="339">+ 339 days</option>
                  <option value="340">+ 340 days</option>
                  <option value="341">+ 341 days</option>
                  <option value="342">+ 342 days</option>
                  <option value="343">+ 343 days</option>
                  <option value="344">+ 344 days</option>
                  <option value="345">+ 345 days</option>
                  <option value="346">+ 346 days</option>
                  <option value="347">+ 347 days</option>
                  <option value="348">+ 348 days</option>
                  <option value="349">+ 349 days</option>
                  <option value="350">+ 350 days</option>
                  <option value="351">+ 351 days</option>
                  <option value="352">+ 352 days</option>
                  <option value="353">+ 353 days</option>
                  <option value="354">+ 354 days</option>
                  <option value="355">+ 355 days</option>
                  <option value="356">+ 356 days</option>
                  <option value="357">+ 357 days</option>
                  <option value="358">+ 358 days</option>
                  <option value="359">+ 359 days</option>
                  <option value="360">+ 360 days</option>
                  <option value="361">+ 361 days</option>
                  <option value="362">+ 362 days</option>
                  <option value="363">+ 363 days</option>
                  <option value="364">+ 364 days</option>
                  <option value="365">+ 365 days</option>
                </select>
              </div>
            </form>
          </div><!--24-->
          <div class="my-2">
            <form class="d-flex align-items-center">
              <div class="col-4 ">
                <label for="inputname205"> Action type:</label>
              </div>
              <div class="col-8">
                  <select class="form-select" id="inputname205" aria-label="Default select example">
                    <option value="1" selected></option>
                    <option value="1">Litigation</option>
                    <option value="1">Dunning letter (Standard letter)</option>
                    <option value="1">Dunning letter with AR (Acknowledgment of reciept)</option>
                    <option value="1">Dunning letter via ERM (Electronic Registered Mail)</option>
                    <option value="1">E-mail</option>
                    <option value="1">Fax</option>
                    <option value="1">SMS</option>
                    <option value="1">Phone</option>
                  </select>
              </div>
            </form>
          </div><!--24-->
          <div class="text-center mt-3">
            <div class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</div>
          </div>
        </div>
      </div>
      <div class="position-fixed new-collection-scenario d-none w-50 " style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
        <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
          <span class="btn btn-secondary position-absolute" onclick="hideAddActionDiv()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
          <h2 class="text-center mb-3">New collection scenario</h2>

      
          <div class="my-2">
            <form class="d-flex align-items-center">
              <div class="col-4 ">
                <label for="inputname20"> Name* :</label>
              </div>
              <div class="col-8">
                  <input type="text" class="form-control">
              </div>
            </form>
          </div><!--24-->
          <div class="text-center mt-3">
            <div class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</div>
          </div>
        </div>
      </div>
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
    <div class="our-titles mt-3 mb-0 text-capitalize text-center">
        <div class="container">
            <h4>mange collection scenarios</h4>
        </div>
    </div>
    <div class="scenarios-and-setting-buttons d-flex">
        <div class="container-fluid">
            <div class="col-6">
    
                <button id="btnone" onclick="secOneOpeen()" class="scenarios-active m-3" style="padding: 5px 10px ;">collection scenarios</button>
                <button id="btntwo" onclick="secTwoOpeen()" style="padding: 5px 10px";>setting</button>
            </div>
        </div>
    </div>
    <hr class="container-fluid">
    <!--start-desc-->
    <section class="sections-1 " id="sec-1">
        <div class="flag-dropdown  mt-3 mb-3">
            <div class="container-fluid d-flex justify-content-end ">
            <button class="btn btn-primary " onclick="showNewCollectionDiv()"><i class="fa-solid fa-plus"></i> New collection scenario</button>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <span><i class="fa-solid fa-plus"></i></span> Add a pre-defined scenario 
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light">
                      <li class="d-flex"><a class="dropdown-item" href="#">Specific Actions <img src="img/united-states.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Standard Collection Scenario <img src="img/united-states.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Acciones específicas <img src="img/spain.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Escenario de reclamación estándar  <img src="img/spain.png" class="img-fluid" alt="">  </a></li>
                      <li><a class="dropdown-item" href="#">Clients publics <img src="img/france.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Clients risqués <img src="img/france.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Modèles actions spécifiques <img src="img/france.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Scénario de relance standard <img src="img/france.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Azioni specifiche <img src="img/italy.png" class="img-fluid" alt=""> </a></li>
                      <li><a class="dropdown-item" href="#">Scenario di sollecito standard <img src="img/italy.png" class="img-fluid" alt=""> </a></li>
    
                  </div>
            </div>
        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-2 col-3 text-center d-flex">
                        <h6>collection scenarios</h6>
                    </div>
                    <div class="col-md-8 col-6 text-center">
                        <h6>action of collection scenarios</h6>
                    </div>
                </div>
                <div class="backg-content-2">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Scénario de relance standard</h6>
                                <h6 class="txt-2-p mt-3 mb-3 text-black-50 text"><span class="text-black-50"><i class="fa-solid fa-star"></i></span>Default collection scenario</h6>
                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">576 clients use this collection
                                        scenarioLink <span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class="" ><a href="" onclick="showAddActionDiv()">1- Pré-relance par email</a></li>
                                    <span>-10days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">2- Pré-relance par email</a></li>
                                    
                                    <span>+45days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">3- Relance téléphonique n°1</a></li>
                                    <span> +7 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">4- Relance par email n°2</a></li>
                                    <span>+14 days Français <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                 <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">5- Demande de relance du commercial </a></li>
                                    <span>+21 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">6- Relance téléphonique n°2</a></li>
                                    <span> +28 days </span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">7- Activer les pénalités + Relance par e-mail n°3</a></li>
                                    <span> +33 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                 <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">8- Courrier de mise en demeure </a></li>
                                    <span>+43 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-bolt"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">9- Contentieux</a></li>
                                    <span> +50 days</span>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">

                <div class="backg-content-3">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Clients publics (FR)</h6>
                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">4 clients use this collection scenario<span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">1- Pré-relance par email</a></li>
                                    <span>-10days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">2- Pré-relance par email</a></li>
                                    
                                    <span>+45days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">3- Relance téléphonique n°1</a></li>
                                    <span> +7 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">4- Relance par email n°2</a></li>
                                    <span>+14 days Français <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">5- Demande de relance du commercial </a></li>
                                    <span>+21 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">6- Relance téléphonique n°2</a></li>
                                    <span> +28 days </span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">7- Activer les pénalités + Relance par e-mail n°3</a></li>
                                    <span> +33 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">8- Courrier de mise en demeure </a></li>
                                    <span>+43 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">
                <div class="backg-content-2">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Clients risqués (FR)</h6>

                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">2 clients use this collection scenario<span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">1- Pré-relance par email</a></li>
                                    <span>-10days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">2- Pré-relance par email</a></li>
                                    <span>+45days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">3- Relance téléphonique n°1</a></li>
                                    <span> +7 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-mobile"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">4- Relance par email n°2</a></li>
                                    <span>+14 days Français <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">5- Demande de relance du commercial </a></li>
                                    <span>+21 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">6- Relance téléphonique n°2</a></li>
                                    <span> +28 days <img src="img/france.png" alt=""> </span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">7- Activer les pénalités + Relance par e-mail n°3</a></li>
                                    <span> +33 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-bolt"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">8- Courrier de mise en demeure </a></li>
                                    
                                    <span>+43 days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                           
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">

                <div class="backg-content-3">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Key accounts scenario (EN)</h6>
           
                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">85 clients use this collection scenarioLink<span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                               <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">1- Pré-relance par email</a></li>
                                    <span>-10days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">2- Pré-relance par email</a></li>
                                    <span>+45days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">3- Relance téléphonique n°1</a></li>
                                    <span> +7 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">4- Relance par email n°2</a></li>
                                    <span>+14 days Français</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">5- Demande de relance du commercial </a></li>
                                    <span>+21 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">6- Relance téléphonique n°2</a></li>
                                    <span> +28 days </span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">7- Activer les pénalités + Relance par e-mail n°3</a></li>
                                    <span> +33 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">8- Courrier de mise en demeure </a></li>
                                    <span>+43 days</span>
                                </ul>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">
                <div class="backg-content-2">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Modèles actions spécifiques</h6>
                              
                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">0 client use this collection scenario <span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">1- Pré-relance par email</a></li>
                                    <span>-10days <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">2- Pré-relance par email</a></li>
                                    <span>+45days  <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">3- Relance téléphonique n°1</a></li>
                                    <span> +7 days  <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">4- Relance par email n°2</a></li>
                                    <span>+14 days Français  <img src="img/france.png" alt=""></span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                 <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">5- Demande de relance du commercial </a></li>
                                    <span>+21 days</span>
                                </ul>
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">

                <div class="backg-content-3">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Risky clients (EN)</h6>
                             
                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">11 clients use this collection scenarioLink<span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                               <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">1- Pré-relance par email</a></li>
                                    <span><i class="fa-solid fa-retweet"></i></span>
                                    <span>-10days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">2- Pré-relance par email</a></li>
                                    <span>+45days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">3- Relance téléphonique n°1</a></li>
                                    <span><i class="fa-solid fa-retweet"></i></span>
                                    <span> +7 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">4- Relance par email n°2</a></li>
                                    <span>+14 days Français</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">5- Demande de relance du commercial </a></li>
                                    <span>+21 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">6- Relance téléphonique n°2</a></li>
                                    <span> +28 days </span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-bolt"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">7- Activer les pénalités + Relance par e-mail n°3</a></li>
                                    <span> +33 days</span>
                                </ul>
                            </div>
                          
                        
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">

                <div class="backg-content-2">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Standard Collection Scenario</h6>

                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">967 clients use this collection scenarioLink <span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">1- Pré-relance par email</a></li>
                                    <span><i class="fa-solid fa-retweet"></i></span>
                                    <span>-10days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">2- Pré-relance par email</a></li>
                                    <span><i class="fa-solid fa-retweet"></i></span>
                                    <span>+45days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">3- Relance téléphonique n°1</a></li>
                                    <span> +7 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">4- Relance par email n°2</a></li>
                                    <span>+14 days Français</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">5- Demande de relance du commercial </a></li>
                                    <span>+21 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">6- Relance téléphonique n°2</a></li>
                                    <span> +28 days </span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span>@</span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">7- Activer les pénalités + Relance par e-mail n°3</a></li>
                                    <span> +33 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">8- Courrier de mise en demeure </a></li>
                                    <span>+43 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <span><i class="fa-solid fa-bolt"></i></span>
                                    <li class=""><a href="" onclick="showAddActionDiv()">9- Contentieux</a></li>
                                    <span> +50 days</span>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">

                <div class="backg-content-3">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class=" mt-3 mb-3">Templates specific actions</h6>
                                
                                <div class="open-serch">
                                    <a href="" class="text-black-50 text-center ">0 client use this collection scenario<span><i class="fa-regular fa-share-from-square"></i></span></a>
                                </div>
                                <div class="three-icons-in-action mt-3 mb-3">
                                    <button class="text-black-50" onclick="showNewCollectionDiv()"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                    <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 ">
                            <div class="end-buttons text-end container">
                                <div class="btn btn-primary text-capitalize mt-2" onclick="showAddActionDiv()"><span><i class="fa-solid fa-plus"></i></span>add an
                                    action</div>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">

                                    <li class=""><a href="">1- Reminder by e-mail No. 1 </a></li>
                                    <span>-1 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <li class=""><a href="">2- Promise to pay follow up </a></li>
                                    <span>+2 days</span>
                                </ul>
                            </div>
                            <div class="content-text-2">
                                <ul class="d-flex">
                                    <li class=""><a href="">2- Dispute follow-up</a></li>
                                    <span>+3 days</span>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="sections-2 d-none" id="sec-2">
        <div class="four-inputs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="firt d-flex justify-content-around mt-3 mb-3">
                            <label>Minimum amount for collection :</label>
                            <input type="text" placeholder="50">
                            <span>€</span>
                        </div>
                        <div class="firt d-flex justify-content-around mt-3 mb-3">
                            <label>Ignore transactions whose amount is less than :</label>
                            <input type="text" placeholder="50">
                            <span>€</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-3 mb-3">
                            <div class="automatic-between d-flex align-items-center">
                                <h6>Automatic action between </h6>
                                <select name="relance_auto_horaire_min" style="font-size: 12px;" class="">
                                    <option value="1">1:00</option>
                                    <option value="2">2:00</option>
                                    <option value="3">3:00</option>
                                    <option value="4">4:00</option>
                                    <option value="5">5:00</option>
                                    <option value="6">6:00</option>
                                    <option value="7">7:00</option>
                                    <option value="8" selected>8:00</option>
                                    <option value="9">9:00</option>
                                    <option value="10">10:00</option>
                                    <option value="11">11:00</option>
                                    <option value="12">12:00</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                    <option value="18">18:00</option>
                                    <option value="19">19:00</option>
                                    <option value="20">20:00</option>
                                    <option value="21">21:00</option>
                                    <option value="22">22:00</option>
                                    <option value="23">23:00</option>
                                    <option value="24">24:00</option>
                                </select>
                                <h6 style="margin: 5px;">and</h6>
                                <select name="relance_auto_horaire_min" style="font-size: 12px;" class="">
                                    <option value="1">1:00</option>
                                    <option value="2">2:00</option>
                                    <option value="3">3:00</option>
                                    <option value="4">4:00</option>
                                    <option value="5">5:00</option>
                                    <option value="6">6:00</option>
                                    <option value="7">7:00</option>
                                    <option value="8" selected>8:00</option>
                                    <option value="9">9:00</option>
                                    <option value="10">10:00</option>
                                    <option value="11">11:00</option>
                                    <option value="12">12:00</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                    <option value="18">18:00</option>
                                    <option value="19">19:00</option>
                                    <option value="20">20:00</option>
                                    <option value="21">21:00</option>
                                    <option value="22">22:00</option>
                                    <option value="23">23:00</option>
                                    <option value="24">24:00</option>
                                </select>
                            </div>                            
                        </div>
                        <div class="col-lg-6   mt-3 mb-3 d-flex align-items-center justify-content-center">
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Sun">
                                <label for="Sun">Sun</label>            
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Mon">
                                <label for="Mon">Mon</label>            
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Tue">
                                <label for="Tue">Tue</label>            
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Wed">
                                <label for="Wed">Wed</label>            
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Thu">
                                <label for="Thu">Thu</label>            
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Fri">
                                <label for="Fri">Fri</label>            
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Sat">
                                <label for="Sat">Sat</label>            
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>

        <div class="editor mt-3 mb-3 ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="my-3">Common signature ( #my_company_signature ):</p>
                        <a href="#" class="mt-3 mb-2">Incorporate dynamic content in your emails with #Hashtag</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="editor-container mb-1">
                            <div class="toolbar">
                              <button onclick="execCmd('bold')"><i class="fas fa-bold"></i></button>
                              <button onclick="execCmd('italic')"><i class="fas fa-italic"></i></button>
                              <button onclick="execCmd('underline')"><i class="fas fa-underline"></i></button>
                              <button onclick="execCmd('strikeThrough')"><i class="fas fa-strikethrough"></i></button>
                              <button onclick="execCmd('justifyLeft')"><i class="fas fa-align-left"></i></button>
                              <button onclick="execCmd('justifyCenter')"><i class="fas fa-align-center"></i></button>
                              <button onclick="execCmd('justifyRight')"><i class="fas fa-align-right"></i></button>
                              <button onclick="execCmd('justifyFull')"><i class="fas fa-align-justify"></i></button>
                              <button onclick="execCmd('insertUnorderedList')"><i class="fas fa-list-ul"></i></button>
                              <button onclick="execCmd('insertOrderedList')"><i class="fas fa-list-ol"></i></button>
                              <button onclick="execCmd('createLink', prompt('Enter the URL:', 'http://'))"><i
                                  class="fas fa-link"></i></button>
                              <button onclick="execCmd('unlink')"><i class="fas fa-unlink"></i></button>
                              <button onclick="insertImage()"><i class="fas fa-image"></i></button>
                              <button onclick="insertTable()"><i class="fas fa-table"></i></button>
                              <button onclick="toggleHTML()">Toggle HTML</button>
                            </div>
                            <div id="editor" style="height:150px ;" class="form-control" contenteditable="true">
                              Start typing here...
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--scirpt Files-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="js/all.min.js"></script>
    <script src="js/searchBar.js"></script>
    <script src="js/collection.js"></script>
    <script src="./js/risk.js"></script>
    <script src="js/mange.js" ></script>
    <script src="js/email.js"></script>
    <!--scirpt Files-->
</body>

</html>