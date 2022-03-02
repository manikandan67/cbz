<template>
    <div class="container">
       
       <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Product</h3> 
</div> 
<div class="panel-body">
  
<form action="designer-finish.html" class="form-horizontal" role="form">

<div class="form-group">
    <label for="name" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-9">
        <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="active" v-model="status"> Active
    </label>
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="inactive" v-model="status"> Inactive
    </label>
    </div>
    <span v-if="errors.status" class="text-danger">{{errors.status[0]}}</span>
</div> <!-- form-group // -->

   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" v-model="name" name="name" id="name" placeholder="Product name">
    </div>
    <span v-if="errors.name" class="text-danger">{{errors.name[0]}}</span>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Prodct code</label>
    <div class="col-sm-9">
      <input type="text" class="form-control"v-model="code" name="code" id="code" placeholder="Code">
    </div>
    <span v-if="errors.code" class="text-danger">{{errors.code[0]}}</span>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <textarea class="form-control" v-model="description" placeholder="Product Description"></textarea>
    </div>
    <span v-if="errors.description" class="text-danger">{{errors.description[0]}}</span>
  </div> <!-- form-group // -->
   <div class="form-group">
    <label for="price" class="col-sm-3 control-label">Price</label>
    <div class="col-sm-3">
   <input type="text" class="form-control"  v-model="price" name="price" id="price" placeholder="Price" @keypress="onlyNumber">
    </div>
    <span v-if="errors.price" class="text-danger">{{errors.price[0]}}</span>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="qty" class="col-sm-3 control-label">Quantity</label>
    <div class="col-sm-3">
   <input type="text" class="form-control" v-model="quantity" name="qty" id="qty" placeholder="Quantity" @keypress="onlyNumber">
    </div>
    <span v-if="errors.quantity" class="text-danger">{{errors.quantity[0]}}</span>
  </div> <!-- form-group // -->
 
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Image</label>
    <div class="col-sm-3">
      <label class="control-label small" for="file_img">Product image (jpg/png):</label> <input type="file"  @change="uploadImage">
    </div>
    <span v-if="errors.image" class="text-danger">{{errors.image[0]}}</span>
   
  </div> <!-- form-group // -->
 
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary" @click.prevent="checkForm()">Submit</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

    </div>
</template>

<script>
    export default {
      props:['url'],

        data () {
      return {
                   status:'active',
                   name:'',
                   code:'',
                   description:'',
                   quantity:'',
                   price:'',
                   product_image:'',
                   errors:[],
                   success:null,

      }
  },
  methods:{
               checkForm()
               {
                this.errors=[];

                let formData = new FormData();

    formData.append("name", this.name);
    formData.append("status", this.status);
    formData.append("code", this.code);
     formData.append("price", this.price);
      formData.append("image", this.product_image);
       formData.append("quantity", this.quantity);
        formData.append("description", this.description);

                 axios.post("/product/create",formData).then(response => {
                    //console.log(response);
                    this.success = response.data.message;
                    this.resetForm();
                 }).catch(error => {
                   this.errors = error.response.data.errors;
                 });
             },
              uploadImage(event){
                //console.log(event);
                this.product_image = event.target.files[0];
               /* const reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e =>{
                    this.previewImage = e.target.result;
                    console.log(this.previewImage);
                };*/
            },
            onlyNumber ($event) {
   //console.log($event.keyCode); //keyCodes value
   let keyCode = ($event.keyCode ? $event.keyCode : $event.which);
   if ((keyCode < 48 || keyCode > 57) && keyCode !== 46) { // 46 is dot
      $event.preventDefault();
   }},
               resetForm()
               {
                this.name='';
                this.code='';
                this.description='';
                this.product_image='';
                this.price='';
                this.quantity='';
                this.status='active';
               },
               
               },
        created() {
           
        }
    }
</script>