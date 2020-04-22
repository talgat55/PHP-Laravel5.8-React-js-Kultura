import React, {useEffect, useState} from 'react';
import {fetchRelatedAfishaPage} from "../../../api/getAfisha";
import AfishaPage from "../elements/AfishaPage";

const Afisha = () => {
    const [afisha, setAfisha] = useState(null);
    const [page, setPage] = useState(1);
    useEffect(() => {
        const fetchData = async () => {
            const dataNews = await fetchRelatedAfishaPage(page);
            setAfisha(dataNews);
        };
        fetchData();
        return () => {
            setAfisha(null);
        }
    }, []);

    return (
        <>
            {
                afisha && (<AfishaPage
                    data={afisha}
                />)
            }

        </>
    );
};
export default Afisha;