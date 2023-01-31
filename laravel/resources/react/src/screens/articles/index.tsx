import React, { useState, useEffect } from "react";
import axios from "axios";

export const Articles = () => {
    const [articles, setArticles] = useState([]);

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/v1/articles").then((res) => {
            setArticles(res.data);
        });
    }, []);

    const fetchArticles = () => {
        articles.map((article) => {
            return article[0];
        });
    };

    return (
        <div className="App">
            <h1>articles index page</h1>
            <h4>
                {articles.map((article) => {
                    return <li key={article.id}>{article.title}</li>;
                })}
            </h4>
            <button>fetch</button>
        </div>
    );
};
