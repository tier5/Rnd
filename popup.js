document.addEventListener("DOMContentLoaded",function(){
  document.querySelector('button').addEventListener("click",function(){
    

    chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
    chrome.tabs.sendMessage(tabs[0].id, {greeting: "hello"}, function(response){
        
    });
});




  });

});
