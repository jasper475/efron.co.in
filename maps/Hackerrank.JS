function processData(input) {
    //Enter your code here
    //check if input containns 4 13 in console.log(input);
   //process.stdin.on("data");
  //  var check = process.stdin.read();
    var pattern4 = /4/i;
    var pattern13 = /13/i;
    
    // next lucky number ? print
        
    //test for pattern4 match
    
    if(input=15) {
        console.log(input);
        process.stdin.on("end");
      }
    
    else if (pattern4.test(input)) {
        
       // console.log("Pattern 4 match with input="+input);
        
        input++; //increment input if it is  matching with 4 to skip
        processData(input);
        
        // check for pattern13 match
    }
    else if (pattern13.test(input)) {
        //console.log("Pattern 13 match with input= "+input);
        
         //console.log("input  equal 13 "+input);
        //console.log("15");
         input++; //increment input if it is  matching with 13
        processData(input); // call back to check for match4 or match13
    }
    
    input++;
    processData(input);
    
    
  } 

process.stdin.resume();
process.stdin.setEncoding("ascii");
_input = "";
process.stdin.on("data", function (input) {
    _input += input;
});

process.stdin.on("end", function () {
   processData(_input);
});
