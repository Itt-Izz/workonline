
$(function(){
//Adding Respective panel    
    let h=document.getElementById('pro')
    loadFile(h,'progress.php')
    let a=document.getElementById('com')
    loadFile(a,'complete.php')
    let k=document.getElementById('can')
    loadFile(k,'cancel.php')      
    let p=document.getElementById('bon')
    loadFile(p,'bonus.php')    
    let fn=document.getElementById('fine')
    loadFile(fn,'fine.php')
    let pay=document.getElementById('payHist')
    loadFile(pay,'payHistory.php')
    let acc=document.getElementById('acc')
    loadFile(acc,'account.php')
    let con=document.getElementById('con')
    loadFile(con,'contact.php')
    let pym=document.getElementById('pay')
    loadFile(pym,'payment.php')
    let stat=document.getElementById('st')
    loadFile(stat,'stats.php')
    let name=document.getElementById('nam2')
    loadFile(name,'contact.php')

function loadFile(ref,url){
        ref.addEventListener('click',function(event){
            event.preventDefault()
            var xhttp=new XMLHttpRequest()  
            xhttp.open('GET',url,true)
                
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    var data = this.responseText
                    document.getElementById("pan").innerHTML = data
                }
            }
            xhttp.send()
        })
    }
    function loginFile(ref,url){
        ref.addEventListener('click',function(event){
            event.preventDefault()
            var xhttp=new XMLHttpRequest()  
            xhttp.open('GET',url,true)
                
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    var data = this.responseText
                    document.getElementById("main").innerHTML = data
                    $("#navR").hide();
                }
            }
            xhttp.send()
        })
    }



})
    