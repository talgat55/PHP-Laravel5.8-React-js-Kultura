import React, {useEffect, useState} from 'react';
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
            {news && (<NewsPage
                data={news}
            />)
            }
        </>
    )
};


export default News;