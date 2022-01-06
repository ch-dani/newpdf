@extends('frontend.layouts.master')
@section("title","home page")
@section("main_content")


    <button onclick = "read()">Read </button>
    <button onclick = "readAll()">Read all </button>
    <button onclick = "add()">Add data </button>
    <button onclick = "remove()">Delete data </button>

    <input type="file" name="" id="fileimg">

@endsection
@section("scripts")




<script src="{{asset('frontend-assets/js/dblite.js')}}" type="text/javascript"></script>
    <script>
        // var db;
        // var request=window.indexedDB.open("dbname",1);
        // request.onerror=function(event){
        //     alert("could not open db");
        // }
        // request.onsuccess=function(event){
        //     db = request.result;
        //     alert("done successfully");
        // }
        // request.onupgradeneeded=function(event){
        //     db=event.target.result; 
        // }
        // alert(db);
        // if(db.objectStoreNames.contain('person')){
        //     alert("not if");
        // } else{
        //     alert("luli");
        // }  
        // request.onupgradeneeded = function(event) {
        //     db = event.target.result;
        //     var objectStore = db.createObjectStore('person', { keyPath: 'id' });
        // }
        // var objectStore = db.createObjectStore(
        //     'person',
        //     { autoIncrement: true }
        // );
        // if(db.objectStoreNames.contain('person')){
        //     alert("not if");
        // }

        // the geniune code

        // var db;
        // var request = window.indexedDB.open("newpdfs1", 1);
        // request.onerror = function(event) {
        // console.log("error: ");
        // };
        // request.onsuccess = function(event) {
        //     alert("successs");
        //     db = request.result;
        //     console.log(db);
        
        
        // };
        
        // the gencode ends



        var db;
        var request=window.indexedDB.open("fuckABC",1);
        request.onerror=function(event){
            alert("errorrr");
            
        }
        request.onsuccess=function(event){
            alert("successed");
            db=request.result;
            console.log(db);
            
            console.log(db.objectStoreNames);
            
            
            
            
        }
        request.onupgradeneeded=function(event){
            alert("ll");
            var objectStore = db.createObjectStore('perLson');
            console.log(db.objectStoreNames);
        }
        
        console.log(db);
        // request.onupgradeneeded=function(event){
        //     alert("fuck hereere");
        // }
        
        // console.log(db);
    </script>


    <script type = "text/javascript">
        //   prefixes of implementation that we want to test
        //   window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
         
         //prefixes of window.IDB objects
        //  window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
        //  window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange ;
        //  if (!window.indexedDB) {
        //     window.alert("Your browser doesn't support a stable version of IndexedDB.")
        //  }
     

        // var obj=db.transaction(["myfirstObj"],"readwrite").objectStore("lnk").add({id:3,file:"nofile.pdf"});
        // obj.onsuccess=function(event){
        //     alert('hurrah! you have addLLL');
        // }
         
        // if(db.objectStoreNames.contain('employee')){
        //     alert("not if");
        // } else{
        //     alert("luli");
        // }  
        
        
        
        
        
        function read() {
                var transaction = db.transaction(["employee"]);
                var objectStore = transaction.objectStore("employee");
                var request = objectStore.get("00-03");
                
                request.onerror = function(event) {
                    alert("Unable to retrieve data from database!");
                };
                
                request.onsuccess = function(event) {
                    // Do something with the request.result!
                    if(request.result) {
                        alert("Name: " + request.result.name + ", Age: " + request.result.age + ", Email: " + request.result.email);
                    } else {
                        alert("Kenny couldn't be found in your database!");
                    }
                };
            }
            function readAll() {
                var objectStore = db.transaction("employee").objectStore("employee");
                
                objectStore.openCursor().onsuccess = function(event) {
                    var cursor = event.target.result;
                    
                    if (cursor) {
                        alert("Name for id " + cursor.key + " is " + cursor.value.name + ",Age: " + cursor.value.age + ", Email: " + cursor.value.email);
                        cursor.continue();
                    } else {
                        alert("No more entries!");
                    }
                };
            }
            function add() {
                // var request=db.transaction(["myfirstObj"],"readwrite").objectStore("lnk").add({id:3,file:"nofile.pdf"});
                var request = db.transaction(["employee"], "readwrite")
                .objectStore("employee")
                .add({ id: "00-03", name: "Kenny", age: 19, email: "kenny@planet.org" });
                
                request.onsuccess = function(event) {
                    alert("Kenny has been added to your database.");
                };
                
                request.onerror = function(event) {
                    alert("Unable to add data\r\nKenny is aready exist in your database! ");
                }
            }

            function remove() {
                var request = db.transaction(["employee"], "readwrite")
                .objectStore("employee")
                .delete("00-03");
                
                request.onsuccess = function(event) {
                    alert("Kenny's entry has been removed from your database.");
                };
            }








        
        
      </script>
      
  
      





     
         
        
         
       
         
       
         
      
         
       



      @endsection