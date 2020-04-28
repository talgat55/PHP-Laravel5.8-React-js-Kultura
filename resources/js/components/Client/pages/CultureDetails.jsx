import React, {useEffect, useState} from 'react';
import {fetchCultureDetailsPage} from "../../../api/getCultureDetails";
import CultureDetailsPage from "../elements/CultureDetailsPage";


const CultureDetails = () => {
    const [cultureDetails, setCultureDetails] = useState(null);
    const [page, setPage] = useState(1);
    useEffect(() => {
        const fetchData = async () => {
            const data = await fetchCultureDetailsPage(page);
            setCultureDetails(data);
        };
        fetchData();
        return () => {
            setCultureDetails(null);
        }
    }, []);
    return (
        <>
            {
                cultureDetails && (<CultureDetailsPage
                    data={cultureDetails}
                />)
            }
        </>
    )
};


export default CultureDetails;