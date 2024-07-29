@extends('app')
@section('content')
    <!--navbar-site-->

    <!--navbar-site-->
    @include('layouts.navbar')
    <!--navbar-site-->

    <section class="m-group mt-3">
        <div class="container">
          <div class="t-manage text-center text-capitalize">
            <p>Import and export your billing information</p>
          </div>
          <div class="router-pages text-center mt-3 mb-2">
            <a href="settings-import-export-data.html"><span><i class="fa-solid fa-download"></i></span> Manual upload « Smart Upload »</a>
            <a href=""><span><i class="fa-solid fa-rotate"></i></span> Automatic upload	</a>
            <a href="settingHistory.html" class="scenarios-active p-2"><span><i class="fa-solid fa-building"></i></span> History of imports</a>
            <a href="settingUsers.html"><span><i class="fa-solid fa-download"></i></span> Export your data</a>
          </div>
        </div>
       
      </section>
      <div class="form-group d-flex align-items-center">
        <div>Display</div>
        <select
          class="form-select w-auto m-2"
          aria-label="Default select example">
          <option selected value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          <option value="134">134</option>
        </select>
        <div>Items</div>
      </div>

    <div class="table-parent mb-3" id="table-scroll">
        <table class="table rounded text-center px-2" style="color:#6A6A6A ;">
            <thead>
                <tr>
                    <th><h6 class="text-start">Data</h6></th>
                    <th>
            <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>item <br> adedd</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>item <br> updated</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Customers <br> added</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Customers <br> updated</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Contacts <br> added</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Contacts <br> updated</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Users <br> added</h6>
              </div>
                        </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Users <br> updated</h6>
              </div>
                        
                    </th>
                        
                </tr>
            </thead>
            <tbody>
               
                
                  <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                </tr>
          
                <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
               
                <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                </tr>
               
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                
                  
                <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                </tr>
      
               
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
 
               
                
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
               
                
                  
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
               
                
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>       
                
                  
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>      
                
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>      
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>      
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
               
                
                  
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
            </tbody>
        </table>
    </div>
    <div class="justify-content-end gap-1 d-flex mb-2">
        <div class="btn btn-outline-primary">Previus</div>
        <div class="btn btn-primary">1</div>
        <div class="btn btn-outline-primary">2</div>
        <div class="btn btn-outline-primary">3</div>
        <div class="btn btn-outline-primary">4</div>
        <div class="btn btn-outline-primary">5</div>
        <div class="btn btn-outline-primary">6</div>
        <div class="btn btn-outline-primary">Next</div>
      </div>
    
    <style>
        .table-responsive {
       
            position: relative;
            margin-bottom: 1rem;
            
        }
        td a {
        color: #000;
        background: #99999999;
        text-decoration: none;
        font-size: 10px;
        padding: 2px;
        border: 2px solid #99999999;
        border-radius: 2px;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }
    
        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            
        }
    
        .table th {
            background-color: white;
            font-weight: bold;
        }
    
        @media (max-width: 768px) {
            .table td {
                font-size: 10px;
                padding: 0.5rem;
            }
          
        }
        @media (max-width:560px) {
          .ring-info p {
            font-size: 14px;
          }
          .t-manage  p {
            font-size: 13px;
          }
        }
    </style>
    
@endsction