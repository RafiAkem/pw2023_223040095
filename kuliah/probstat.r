data <- c(2.5, 3.1, 3.3, 3.6, 3.8, 4.0, 4.1, 4.3, 4.5, 4.7,
4.8, 4.9, 5.0, 5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7,
5.8, 5.9, 6.0, 6.1, 6.2, 6.3, 6.4, 6.5, 6.6, 6.7,
6.8, 6.9, 7.0, 7.1, 7.2, 7.3, 7.4, 7.5, 7.6, 7.7,
7.8, 7.9, 8.0, 8.1, 8.2, 8.3, 8.4, 8.5, 8.6, 8.7,
8.8, 8.9, 9.0, 9.1, 9.2, 9.3, 9.4, 9.5, 9.6, 9.7,
9.8, 9.9, 10.0, 10.1, 10.2, 10.3, 10.4, 10.5, 10.6, 10.7,
10.8, 10.9, 11.0, 11.1, 11.2, 11.3, 11.4, 11.5, 11.6, 11.7,
11.8, 11.9, 12.0, 12.1, 12.2, 12.3, 12.4, 12.5, 12.6, 12.7,
12.8, 12.9, 13.0, 13.1, 13.2, 13.3, 13.4, 13.5, 13.6, 13.7)

data_sum <- sum(data)
data_count <- length(data)
data_mean <- data_sum / data_count
data_median <- median(data)
data_mode <- mode(data) #numeric
data_var <- var(data)
data_sd <- sd(data)
data_min <- min(data)
data_max <- max(data)

x <- seq(0, 16, length = 1000)

pdf <- dnorm(x, mean = data_mean, sd = data_sd)

plot(x, pdf, type = "l", xlabel = "x", ylab = "PDF")

polygon(c(9.5, seq(0, 16, length = 1000)), c(0, dnorm(seq(0, 16, length = 1000), mean(data),sd(data))), col = "gray")

print(polygon)