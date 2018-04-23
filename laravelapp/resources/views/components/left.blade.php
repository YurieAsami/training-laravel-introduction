<html>
<style>
</style>
<div class="col-lg-3 col-md-4 mb-3">
  <button class="btn btn-light btn-block dropdown-toggle d-md-none" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
    Filter Data
  </button>
  <div class="collapse d-md-block" id="collapseFilter">
    <div class="filter-sidebar mt-3 mt-md-0">
      <div class="title"><span>Enabled Filters</span></div>
      <ul>
          <li>Categories: T-Shirts <a href="#" class="remove-filter"><i class="material-icons md-1">close</i></a></li>
          <li>Availability: In Stock <a href="#" class="remove-filter"><i class="material-icons md-1">close</i></a></li>
          <li>Brand: Brand Name 1 <a href="#" class="remove-filter"><i class="material-icons md-1">close</i></a></li>
      </ul>
    </div>
    <div class="filter-sidebar">
      <div class="title"><span>Categories</span></div>
      <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
        <div class="list-group-collapse sub-men">
          <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Clothing <small class="text-muted">(60)</small></a>
          <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
            <div class="list-group">
              <a href="/test/grid" class="list-group-item list-group-item-action active">T-Shirts <small class="text-muted">(10)</small></a>
              <a href="/test/grid" class="list-group-item list-group-item-action">Polo T-Shirts <small class="text-muted">(11)</small></a>
              <a href="/test/grid" class="list-group-item list-group-item-action">Round Neck T-Shirts <small class="text-muted">(12)</small></a>
              <a href="/test/grid" class="list-group-item list-group-item-action">V Neck T-Shirts <small class="text-muted">(13)</small></a>
              <a href="/test/grid" class="list-group-item list-group-item-action">Hooded T-Shirts <small class="text-muted">(14)</small></a>
            </div>
          </div>
        </div>
        <div class="list-group-collapse sub-men">
          <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Footwear <small class="text-muted">(45)</small></a>
          <div class="collapse" id="sub-men2" data-parent="#list-group-men">
            <div class="list-group">
              <a href="/test/grid" class="list-group-item list-group-item-action">Sports Shoes <small class="text-muted">(10)</small></a>
              <a href="/test/grid" class="list-group-item list-group-item-action">Sneakers <small class="text-muted">(15)</small></a>
              <a href="/test/grid" class="list-group-item list-group-item-action">Formal Shoes <small class="text-muted">(20)</small></a>
            </div>
          </div>
        </div>
        <a href="/test/grid" class="list-group-item list-group-item-action">Accessories <small class="text-muted">(11)</small></a>
        <a href="/test/grid" class="list-group-item list-group-item-action">Bags <small class="text-muted">(22)</small></a>
      </div>
    </div>
    <div class="filter-sidebar">
      <div class="title"><span>Brand</span></div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="filterBrand1" checked="checked">
        <label class="custom-control-label" for="filterBrand1">Brand Name 1</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="filterBrand2">
        <label class="custom-control-label" for="filterBrand2">Brand Name 2</label>
      </div>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="filterBrand3">
        <label class="custom-control-label" for="filterBrand3">Brand Name 3</label>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-12">
        <div class="filter-sidebar">
          <div class="title"><span>Options</span></div>
            <ul>
              <li>
                <select name="select-filter1" id="select-filter1" hidden="hidden">
                  <option value="all">Dropdown as Select</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                </select>
                <div class="dropdown">
                  <button class="btn btn-select dropdown-toggle btn-block text-right" type="button" id="dropdown-select-filter1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu animate w-100" aria-labelledby="dropdown-select-filter1" data-select="select-filter1">
                    <button class="dropdown-item" type="button" data-value="all"><span class="float-left">Dropdown as Select</span></button>
                    <button class="dropdown-item" type="button" data-value="1"><span class="float-left">Option 1</span></button>
                    <button class="dropdown-item" type="button" data-value="2"><span class="float-left">Option 2</span></button>
                  </div>
                </div>
              </li>
              <li>
                <select name="select-filter2" class="custom-select">
                  <option value="all">Native Select</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                </select>
              </li>
            </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-12">
        <div class="filter-sidebar">
          <div class="title"><span>Options 2</span></div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input type="radio" id="filterOption1" name="radio-stacked" class="custom-control-input" checked="checked">
              <label class="custom-control-label" for="filterOption1">All Options 2</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="filterOption2" name="radio-stacked" class="custom-control-input">
              <label class="custom-control-label" for="filterOption2">Option 2.1</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="filterOption3" name="radio-stacked" class="custom-control-input">
              <label class="custom-control-label" for="filterOption3">Option 2.2</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="filterOption4" name="radio-stacked" class="custom-control-input">
              <label class="custom-control-label" for="filterOption4">Option 2.3</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-12">
        <div class="filter-sidebar">
          <div class="title"><span>Price Range</span></div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Min : 円</span>
            </div>
            <input type="text" class="form-control" name="min-price" id="min-price" value="100" />
            <div class="input-group-append input-group-prepend">
              <span class="input-group-text">Max : 円</span>
            </div>
            <input type="text" class="form-control" name="max-price" id="max-price" value="1000" />
          </div>
          <div class="price-range">
            <div id="price-range-slider"></div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-12">
        <div class="filter-sidebar">
          <div class="title"><span>Rating</span></div>
          <div class="rating-range">
            <div id="rating-range" class="noUi-target noUi-rtl noUi-vertical"></div>
          </div>
          <input type="hidden" class="form-control" name="min-range" id="min-range" value="1" />
          <input type="hidden" class="form-control" name="max-range" id="max-range" value="5" />
        </div>
      </div>
    </div>          </div>
</div>
</html>
