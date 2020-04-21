import React from 'react';
import Item from "../NewsBlock/Item";
import styled from 'styled-components';
import PropTypes from 'prop-types';
import Title from "../Title/Title";

const NewsPage = ({data}) => {
    // console.log(data);
    return (
        <NewsPageComponent>
            <div className="container">
                <div className="row">
                    <Title
                        title="Новости"
                    />
                </div>
                <div className="row">
                    <ul className="news-list row">
                        {
                            data.data.map((item, index) => (
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
            </div>
        </NewsPageComponent>
    )
};
NewsPage.propTypes = {
    data: PropTypes.object
};
const NewsPageComponent = styled.section`
  margin: 40px 0;
  .news-list{
    margin: 0;
    padding: 0;
    li{
      list-style: none;
    }
  }
`;
export default NewsPage;