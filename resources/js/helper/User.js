import Token from './Token'
import AppStorage from './AppStorage'
class User {
    responseAfterLogin(res){
        console.log(res.data)
        const access_token =  res.data.access_token
        const username = res.data.name
        const user_type = res.data.user_type
        const user_id = res.data.user_id

        
        if(Token.isValid(access_token)){
            AppStorage.store(access_token, user_id, username, user_type)

            // if(business_id)
            // {
            //     localStorage.setItem('business_id', business_id);
            // }
            // if(branch_id)
            // {
            //     localStorage.setItem('branch_id', branch_id);
            // }
        }
    }

    hasToken(){
        const storeToken = localStorage.getItem('token')
        if(storeToken){
            return Token.isValid(storeToken) ? true : false
        }
        return false
    }

    loggedIn(){
        return this.hasToken()
    }

    name(){
        if(this.loggedIn()){
            return localStorage.getItem('user')
        }
    }

    user_type(){
        if(this.loggedIn()){
            return localStorage.getItem('user_type')
        }
    }

    id(){
        if(this.loggedIn()){
            const payload = Token.payload(localStorage.getItem('token'))
            return payload.sub
        }

        return false
    }

    // business_id(){
    //     if(this.loggedIn()){
    //         return localStorage.getItem('business_id')
    //     }
    // }

    BearerToken(){
        const storeToken = localStorage.getItem('token')
       return `Bearer ${storeToken}`
        
    }

    createHeaders() {
        const token = localStorage.getItem('token')
        const headers = {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
        };
      
        if (token) {
          headers['Authorization'] = `Bearer ${token}`;
        }
      
        return headers;
      }
}
export default User = new User();