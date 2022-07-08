# Api Docs

## Base Url: https://himalyan-explorations.herokuapp.com/api/

# website:

```
post: /bookNow
get: /treksList
get: /blogList
get: /discountList
```

# admin pannel:

#### Treks:

```
 post: /addTreks
 get: /treksList
 get(single trek): /getTreks/{id}
 delete: /trekDelete/{id}
 update: /updateTreks/{id}
```

#### DiscountTreks:

```
 post: /addTreks
 get: /discountList
 get(single trek): /getDiscount/{id}
 delete: /discountDelete/{id}
 update: /updateDiscount/{id}
```

#### BlogForms:

```
 post: /blogForm
 get: /blogList
 get(single trek): /getBlog/{id}
 delete: /blogDelete/{id}
 update: /updateBlog/{id}
```

#### Booking form:

```
 get: /bookNowList
 delete: /bookingDelete/{id}

```
