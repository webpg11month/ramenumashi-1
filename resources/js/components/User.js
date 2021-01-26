import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

function User() {

    const [user_tb, setUsers] = useState([]);

    useEffect(() => {
        getUsers()
    },[])

    const getUsers = async () => {
        const response = await axios.get('/api/shop/user');
        setUsers(response.data.user_tb)
    }

    return (
        <div>
            <h1>Userページ</h1>
            <ul>
                {user_tb.map((user) => <li key="{user.id}">{user.user_name}
                <Link to={`/shop/user/${user.id}`}>
                    詳細
                </Link>
                </li>)}
            </ul>
            
        </div>
    );
}

export default User;