<?php

define ("GET_ARTICLES_BY_AUTHOR", "SELECT * from Article where Author = :0;");


define ("GET_LAST_THREE_ARTICLES", "SELECT a.Id, a.Title, a.Subheading, a.Body, a.Date, a.url, u.Name
                                    from Article as a
                                    INNER JOIN User AS u ON u.Id = a.Author
                                    Order by a.Date DESC LIMIT 5;");

define ("GET_ARTICLE", "SELECT a.Id, a.Title, a.Subheading, a.Body, a.Date, a.Author, a.url, u.Name
                        from Article as a
                        INNER JOIN User AS u ON u.Id = a.Author
                        where a.Id = :0;");

define ("ADD_ARTICLE", "INSERT INTO Article(Title, Subheading, Body, Author, Date, url)
                        VALUES (:0, :1, :2, :3, NOW(), :4);");

define ("UPDATE_ARTICLE", "UPDATE Article
                          SET Title = :0, Subheading = :1, Body = :2, url = :3, Date = NOW()
                          WHERE Author = :4 AND Id =:5;");

define ("DELETE_ARTICLE", "DELETE from Article where id = :0;");
