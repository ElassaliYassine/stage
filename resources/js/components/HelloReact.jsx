
import React , { useEffect , useState} from 'react';
import ReactDOM from 'react-dom';

// import axios from 'axios';

const react = document.getElementById('hello-react')

export default function HelloReact( ) {

    // axios.post('url',{id:id}).thenn(res=> console.log(res.data)).catch(err => console.log(err.data)) ;
    
    let url = window.location.href;

    var parts = url.split('/');
var id = parts.pop() || parts.pop();  // handle potential trailing slash



  // let slug = url => new URL(url).pathname.match(/[^\/]+/g)
    
   // console.log("params =>",slug)
  //  const id = react.nextElementSibling.defaultValue
    const [status, SetStatus] = useState(false);
    const [phone, SetPhone] = useState("");
       
    const getPhone = () => {
            fetch(`http://127.0.0.1:8000/getNumber/${id}`)
                .then((response) => {
                    // console.log(response);
                    return response.json();
                })
                .then((users) => {
                    SetPhone(users.number_phone);
                    SetStatus(true);
                });
        //  console.log(id);
                
            }
            
            
            // console.log(phone);
            // console.log(status);

        
        // axios.get(`http://127.0.0.1:8000/getNumber/40`)
        // .then((res) => {
        //         console.log("clicked")
        //         SetPhone(res.data.phone);
        //         SetStatus(true)
        //         console.log(res.data);
        //     }).catch(err => {
                
        //     })


     
    
    const linke = `tel:${phone}`
    
    
    return (
        <div>
            
            <div>
                {
                     status ?
                        (
                         <a href={linke} className="btn  bn_message">{phone}</a>
                     ) : (
                        <button   className="  btn  bn_message "   onClick={()=> getPhone()}>Click to shon phone number</button>
                     )
                        
               }
            


            </div>
        </div>
    );

}




if (react) {
    // console.log(react.nextElementSibling.defaultValue)
    
    ReactDOM.render(<HelloReact   />, document.getElementById('hello-react'));
    }
