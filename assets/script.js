
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


    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
    