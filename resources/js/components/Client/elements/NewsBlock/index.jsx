import React from 'react';
import Subtitle from "../Title/Subtitle";
import styled from 'styled-components';
import Item from './Item';
import Link from "../Link/Link";
import PropTypes from "prop-types";


const NewsBlock = ({data}) => {

    return (
        <NewsComponent>
            <div className="container">
                <div className="row">
                    <Subtitle
                        title="Новости"
                    />
                </div>
                <div className="row">
                    <ul className="news-list row">
                        {
                            data.map( (item, index) =>(
                                <Item
                                    key={index}
                                    name={item.name}
                                    image={item.image}
                                    slug={item.slug}
                                    anons={item.anons}
                                    date={item.publish_date}
                                />
                            ))
                        }
                    </ul>
                </div>
                <div className="row  justify-content-center mt-4">
                    <Link
                        name="Все материалы"
                        link="/news"
                    />
                </div>
            </div>
        </NewsComponent>
    )
};
const NewsComponent = styled.section`
  margin-bottom: 50px;
  .news-list{
    margin: 0 -15px 50px;
    padding: 0;
    li{
        list-style: none;
    }
  }
`;
NewsBlock.propTypes = {
  data:  PropTypes.array
};
export default NewsBlock;

