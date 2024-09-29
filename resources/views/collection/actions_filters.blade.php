<div>
    <form class="row justify-content-center">
        <div class="col-lg-1 col-md-2 col-sm-3 dropdown">
            <a class="dropdown-toggle text-secondary form-control m-2" href="#" id="reportsDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-signal"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
                <li><a class="dropdown-item text-secondary" href="#" onclick="showCharts1()"><i
                            class="fa-solid fa-hand-point-right"></i>Actions to do</a></li>
                <li><a class="dropdown-item text-secondary" href="#" onclick="showCharts2()"><i
                            class="fa-solid fa-thumbs-up"></i> Actions done</a>
                </li>
                <li><a class="dropdown-item text-secondary" href="#" onclick="showCharts3()"><i
                            class="fa-solid fa-clock-rotate-left"></i> Actions
                        Forecast</a></li>
            </ul>
        </div>
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2" aria-label="Default select example">
                <option selected disabled>Action Type :</option>
                <option value="1">Litigation</option>
                <option value="2">Dunning letter</option>
                <option value="3">E-mail</option>
                <option value="3">SMS</option>
                <option value="3">Phone</option>
            </select>
        </div>
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2" aria-label="Default select example">
                <option selected disabled>Specific Action :</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
            </select>
        </div>
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2" aria-label="Default select example">
                <option value="" selected disabled>Clients Group :</option>
                <option value="1">ATLANTIQue</option>
                <option value="2">Central</option>
                <option value="3">Clients douteux</option>
                <option value="3">Clients France</option>
                <option value="3">Clients Grands Comptes</option>
                <option value="3">Clients Mass market</option>
                <option value="3">Clients OSP</option>
                <option value="3">Clients PME</option>
                <option value="3">Clients Publics</option>
                <option value="3">Clients Risques</option>
                <option value="3">Clients Speciaux</option>
                <option value="3">Clients VIP</option>
                <option value="3">ClIENT_MEDIPREMA</option>
                <option value="3">France Contentieux</option>
                <option value="3">Group Alias</option>
                <option value="3">Group Elec</option>
                <option value="3">Group Imprimeurs</option>
                <option value="3">Group Industrie</option>
                <option value="3">Magasins de villa</option>
                <option value="3">Market Place</option>
                <option value="3">Public</option>
                <option value="3">Relance team back office</option>
                <option value="3">Retail</option>
                <option value="3">Salomon</option>
                <option value="3">Test 2</option>
                <option value="3">US Clients</option>
            </select>
        </div>
        <div class="col-md-2 col-sm-3 text-center">
            <button type="button" class="btn btn-secondary m-2" onclick="toggleRows(this)">
                <i class="fa-solid fa-chevron-down" id="toggleIconDown" style="transition: all 0.6s"></i>
            </button>
        </div>
    </form>
    <form class="row d-none toggle-row">
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2 w-100" aria-label="Default select example">
                <option selected disabled>Collector :</option>
                <option value="1">Mike Anderson(Collector)</option>
                <option value="1">Nicolas Grayson(Collector)</option>
                <option value="1">Paul Mayer(Administrator)</option>
                <option value="1">Veronique Miguet(Credit Manager)</option>
                <option value="1">[None]</option>
            </select>
        </div>
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2" aria-label="Default select example">
                <option selected disabled>Resolver :</option>
                <option value="1">Brad Jackson(Sales Manager)</option>
                <option value="1">Juse Durant(Sales Manager)</option>
                <option value="1">Paul Mayer(Sales Manager)</option>
                <option value="1">Thomas Smith(Executive Officer)</option>
                <option value="1">
                    Vironica Campbell(Sales Administration)
                </option>
            </select>
        </div>
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2" aria-label="Default select example">
                <option selected disabled>Associated With Client :</option>
                <option value="1">Brad Jackson(Sales Manager)</option>
                <option value="1">Juse Durant(Sales Manager)</option>
                <option value="1">Paul Mayer(Sales Manager)</option>
                <option value="1">Thomas Smith(Executive Officer)</option>
                <option value="1">
                    Vironica Campbell(Sales Administration)
                </option>
            </select>
        </div>
    </form>
    <form class="row col-lg-9 d-none justify-content-center toggle-row">
        <div class="form-group col-md-4 col-sm-6">
            <select class="form-select m-2" aria-label="Default select example">
                <option value="" selected disabled>
                    Customers Custom Field #1 :
                </option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">[None]</option>
                <option value="3">[Not Empty]</option>
            </select>
        </div>
        <div class="form-group col-md-4 col-sm-6">
            <select class="form-select m-2 w-100" aria-label="Default select example">
                <option selected disabled>Customers Custom Field #2 :</option>
                <option value="1">AZ</option>
                <option value="2">BI</option>
                <option value="3">[None]</option>
                <option value="3">[Not Empty]</option>
            </select>
        </div>
    </form>
</div>
