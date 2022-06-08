
const app = angular.module('sawita', [])

/**
 * @controller footerController is for managing footer state
 */
app.controller('FooterController', function() {
    /**
     * @property copyrightYear sets the copyright year
     */
    this.copyrightYear = new Date().getFullYear();
})

/**
 * @controller InquiryController handling inquiries 
 */
app.controller('InquiryController', function() { 
    this.name = "";
    this.email = "";
    this.subject = "";
    this.message = "";
    this.security = "EC"+Math.ceil(Math.random() * 9999) +""+"SA"+ Math.ceil(Math.random() * 9999); //capture human verification
    this.answer = "";

    this.sendInquiry = function() { 
        var templateParams = {
            name: this.name.trim(),
            email: this.email.trim(),
            subject: this.subject.trim(),
            message: this.message.trim()
        };

        if(this.security !== this.answer){
            Swal.fire({
                title: "Security Question",
                text: "Your security answer/verification did not pass kindly contact webmaster@sawita.co.za",
                icon: "error"
            })
        }else{
            emailjs.send('service_fk1cgvk', 'template_fpz343c', templateParams)
            .then(function(response) {
                Swal.fire({
                    title: "Thank You",
                    text: "We will get back to you within 2-3 business days",
                    icon: "success"
                })
                setTimeout(()=>{
                    location.reload()
                }, 5000)
            }, function(error) {
               console.log('FAILED...', error);
            });
        }
    }
})

document.addEventListener('DOMContentLoaded', (e)=>{
    if(Swal){
        if(!localStorage.getItem('cookies')){
            let cookiesNotification = new Swal({
                text: "This website uses cookies to improve website experience",
                title: "Notice",
                icon: "info"
            });
            localStorage.setItem('cookies', JSON.stringify({
                notified: true,
                accepted: true,
                date: new Date().toLocaleDateString()
            }))
        }
    }
})