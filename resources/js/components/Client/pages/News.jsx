import React, {useEffect, useState} from 'react';
import Footer from "../elements/Footer/Footer";
import Header from "../elements/Header/Header";
import NewsPage from "../elements/NewsPage";
import {fetchNewsWithPage} from "../../../api/getNews";
const News = () => {
    const [news, setNews] = useState(null);
    const [page, setPage] = useState(1);
    useEffect(() => {
        const fetchData = async () => {
            const dataNews = await fetchNewsWithPage(page);
            setNews(dataNews);
        };
        fetchData();
        return () => {
            setNews(null);
        }
    }, []);
    return (
        <>
            <Header/>
            {news && (<NewsPage
                data={news}
            />)
            }
            <Footer/>
        </>
    )
};


export default News;