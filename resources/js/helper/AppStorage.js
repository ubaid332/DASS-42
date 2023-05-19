class AppStorage{

    storeToken(token){

        localStorage.setItem('token', token);

    }


    storeUser(user_id, user, user_type){

        localStorage.setItem('user_id', user_id);
        localStorage.setItem('user', user);
        localStorage.setItem('user_type', user_type);

    }

    store(token, user_id, user, user_type){
        this.storeToken(token)
        this.storeUser(user_id, user, user_type)
    }

    clear(){  
        localStorage.removeItem('token')
        localStorage.removeItem('user_id')
        localStorage.removeItem('user')
        localStorage.removeItem('user_type')
        localStorage.removeItem('business_id')  
        localStorage.removeItem('branch_id')
    }

    getToken(){
        localStorage.getItem('token');
    }

    getUserId(){
        localStorage.getItem('user_id');
    }

    getUser(){
        localStorage.getItem('user');
    }

    getUserType(){
        localStorage.getItem('user_type');
    }

}

export default AppStorage = new AppStorage();