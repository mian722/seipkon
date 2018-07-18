@extends('layouts.header')
         
         @section('content') 
         <!-- Right Side Content Start -->
         <section id="content" class="seipkon-content-wrapper">
            <div class="page-content">
               <div class="container-fluid">
                   
                  <!-- Breadcromb Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="breadcromb-area">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-left">
                                    <h3>Add product</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>e-Commerce</li>
                                       <li>Add Product</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Add Product Area Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <div class="add-product-form-group">
                                    <h3>Product Info</h3>
                                    <form>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <label>Product Name</label>
                                                <input type="text" placeholder="Enter Product Name" value="Cotton T-Shirt">
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <label>Brand Name</label>
                                                <input type="text" placeholder="Enter Brand Name" value="ABC Brand">
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <p>
                                                <label>Category</label>
                                                <select class="selectpicker-product select-pro">
                                                   <option selected>Mens</option>
                                                   <option>Category 1</option>
                                                   <option>Category 2</option>
                                                   <option>Category 3</option>
                                                   <option>Category 4</option>
                                                </select>
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p>
                                                <label>Size</label>
                                                <select class="selectpicker-product select-pro">
                                                   <option>XX</option>
                                                   <option>XL</option>
                                                   <option>M</option>
                                                   <option selected>XXL</option>
                                                   <option>L</option>
                                                   <option>SM</option>
                                                </select>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <p>
                                                <label>Price</label>
                                                <input type="text" placeholder="Enter Price" value="$290">
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p>
                                                <label>Discount</label>
                                                <input type="text" placeholder="Enter Discount as Percentage" value="30%">
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <label>Description</label>
                                                <textarea placeholder="Write Product Description Here">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</textarea>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <button type="submit" class="btn btn-success" >
                                                <i class="fa fa-check"></i>
                                                Save Changes
                                                </button>
                                                <button type="submit" class="btn btn-danger" >
                                                <i class="fa fa-times"></i>
                                                Cancel
                                                </button>
                                             </p>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="add-product-image-upload">
                                    <h3>Product Thumb</h3>
                                    <form>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="product-upload-image">
                                                <img src="{{ asset('public/assets/img/product/pro-1.png') }}" alt="image" />
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="product-upload-action">
                                                <div class="product-upload btn btn-info">
                                                   <p>
                                                      <i class="fa fa-upload"></i>
                                                      Upload Another Image
                                                   </p>
                                                   <input type="file" >
                                                </div>
                                                <button type="submit" class="btn btn-danger" >
                                                <i class="fa fa-trash"></i>
                                                Delete Image
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Add Product Area -->
                   
               </div>
            </div>
             
         @endsection