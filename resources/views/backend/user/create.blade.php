@extends('layouts.backend.master')

@section('content')
<div class="page-wrapper" style="min-height: 294px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Add Model<a href="{{route('users.index')}}" class="btn btn-danger" style="float:right;">Go Back</a></h3>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
                
            <div class="col-lg-12">
                    @include('frontend.msgs.messages')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="{{route('users.store')}}" method="POST">
                                            @csrf
                                        <div class="form-group">
                                            <label for="modelname">Model Name</label>
                                            <input type="text" class="form-control" name="modelname" id="modelname" placeholder="Enter Model Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="modelemail">Model Email address</label>
                                            <input type="email" class="form-control" name="modelemail" id="modelemail" placeholder="Enter email">
                                        </div>
                                              
                                        <div class="form-group" id="app">
                                            <label for="modelpassword">Model Password Generate</label>
                                            <vue-password size="8" auto="true" class=""></vue-password>
                                          </div>
                                        
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
   

           
@endsection
@section('js')
<script>
Vue.component('vue-password', {
  template: '<div class="input-group col-md-6 p-0"><input :type="type" id="modelpassword" name="modelpassword" class="form-control" :placeholder="placeholder" :value="password"/><span class="input-group-btn"><button type="button" class="btn btn-primary" @click="generate()"><i class="fas fa-redo"></i> Generate Password</button></span></div>',
  props : {
    type: {
      type: String,
      default: 'text'
    },
    size: {
      type: String,
      default: '32'
    },
    characters: {
      type: String,
      default: 'a-z,A-Z,0-9,#'
    },
    placeholder: {
      type: String,
      default: 'Password'
    },
    
    auto: [String, Boolean],
    value: ''
  },
  data: function() {
    return {
      password: this.value
    }
  },
  mounted: function() {
    if(this.auto == 'true' || this.auto == 1) {
      this.generate();
    }
  },
  methods: {
    
    generate () {
      let charactersArray = this.characters.split(',');  
      let CharacterSet = '';
      let password = '';
      
      if( charactersArray.indexOf('a-z') >= 0) {
        CharacterSet += 'abcdefghijklmnopqrstuvwxyz';
      }
      if( charactersArray.indexOf('A-Z') >= 0) {
        CharacterSet += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      }
      if( charactersArray.indexOf('0-9') >= 0) {
        CharacterSet += '0123456789';
      }
      if( charactersArray.indexOf('#') >= 0) {
        CharacterSet += '![]{}()%&*$#^<>~@|';
      }
      
      for(let i=0; i < this.size; i++) {
        password += CharacterSet.charAt(Math.floor(Math.random() * CharacterSet.length));
      }
      this.password = password;
    }
    
  }
});

new Vue({
  el: '#app',
  data: {},
  methods: {}
});

</script>
@endsection
           